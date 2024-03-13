<?php

namespace Controllers;

use MVC\Router;
use Model\Articulo;

class ArticuloController {
    public static function index(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $url = 'articulos';
        $tipo = 'articulo';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }

        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $articulos = Articulo::buscar($terminoBusqueda);
        } else {
            $articulos = Articulo::all();
        }

        // Render a la vista
        $router->render('admin/general', [
            'titulo' => 'articulos',
            'publicaciones' => $articulos,
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
        $articulo = new Articulo;
        $url = 'articulos';
        $tipo = 'articulo';
        $accion = 'Crear';
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fechaActual = date('Y-m-d');

            $articulo->creador = $user_name;
            $articulo->fecha = $fechaActual;

            // Leer enlace
            $articulo->sincronizar($_POST);
            
            // Validar
            $alertas = $articulo->validar();
    
            // Guardar el registro
            if (empty($alertas)) {
                // Guardar en la DB
                $resultado = $articulo->crear();
    
                if ($resultado) {
                    header('Location: /dashboard/articulos');
                }
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Crear Articulo',
            'alertas' => $alertas,
            'publicacion' => $articulo,
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
        $url = 'articulos';
        $tipo = 'articulo';
        $accion = 'Editar';
        
        // Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if(!$id) {
            header('Location: /dashboard/articulos');
        }
    
        // Obtener articulo a editar
        $articulo = Articulo::find($id);
    
        if(!$articulo) {
            header('Location: /dashboard/articulos');
        }
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(empty($articulo->creador)) {
                $articulo->creador = $user_name;

            }
            if(empty($articulo->fecha)) {
                $fechaActual = date('Y-m-d');
                $articulo->fecha = $fechaActual;
            }

            // Actualizar la información
            $articulo->sincronizar($_POST);
    
            // Validar
            $alertas = $articulo->validar();
    
            // Guardar el registro
            if(empty($alertas) && $articulo->actualizar()) {
                header('Location: /dashboard/articulos');
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Editar Articulo',
            'alertas' => $alertas,
            'publicacion' => $articulo,
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
            $articulo = Articulo::find($id);
    
            if ($articulo && $articulo->eliminar()) {
                header('Location: /dashboard/articulos');
            } else {
                header('Location: /dashboard/articulos');
            }
        }
    } */
}