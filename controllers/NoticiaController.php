<?php

namespace Controllers;

use MVC\Router;
use Model\Noticia;

class NoticiaController {
    public static function index(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $url = 'noticias';
        $tipo = 'noticia';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }

        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $noticias = Noticia::buscar($terminoBusqueda);
        } else {
            $noticias = Noticia::all();
        }

        // Render a la vista
        $router->render('admin/general', [
            'titulo' => 'Noticias',
            'publicaciones' => $noticias,
            'user_name' => $user_name,
            'url' => $url,
            'tipo' => $tipo,
        ]);
    }

    public static function crear(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $alertas = [];
        $noticia = new Noticia;
        $url = 'noticias';
        $tipo = 'noticia';
        $accion = 'Crear';
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fechaActual = date('Y-m-d');

            $noticia->creador = $user_name;
            $noticia->fecha = $fechaActual;

            // Leer enlace
            $noticia->sincronizar($_POST);
            
            // Validar
            $alertas = $noticia->validar();
    
            // Guardar el registro
            if (empty($alertas)) {
                // Guardar en la DB
                $resultado = $noticia->crear();
    
                if ($resultado) {
                    header('Location: /dashboard/noticias');
                }
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Crear Noticia',
            'alertas' => $alertas,
            'publicacion' => $noticia,
            'user_name' => $user_name,
            'url' => $url,
            'tipo' => $tipo,
            'accion' => $accion,
        ]);
    }

    public static function editar(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $alertas = [];
        $url = 'noticias';
        $tipo = 'noticia';
        $accion = 'Editar';
        
        // Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if(!$id) {
            header('Location: /dashboard/noticias');
        }
    
        // Obtener noticia a editar
        $noticia = Noticia::find($id);
    
        if(!$noticia) {
            header('Location: /dashboard/noticias');
        }
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(empty($noticia->creador)) {
                $noticia->creador = $user_name;

            }
            if(empty($noticia->fecha)) {
                $fechaActual = date('Y-m-d');
                $noticia->fecha = $fechaActual;
            }

            // Actualizar la información
            $noticia->sincronizar($_POST);
    
            // Validar
            $alertas = $noticia->validar();
    
            // Guardar el registro
            if(empty($alertas) && $noticia->actualizar()) {
                header('Location: /dashboard/noticias');
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Editar Noticia',
            'alertas' => $alertas,
            'publicacion' => $noticia,
            'user_name' => $user_name,
            'url' => $url,
            'tipo' => $tipo,
            'accion' => $accion,
        ]);
    }

    /* public static function delete() {
        session_start();
        isAuth();
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $noticia = Noticia::find($id);
    
            if ($noticia && $noticia->eliminar()) {
                header('Location: /dashboard/noticias');
            } else {
                header('Location: /dashboard/noticias');
            }
        }
    } */
}