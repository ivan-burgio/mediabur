<?php

namespace Controllers;

use MVC\Router;
use Model\Noticia;

class NoticiaController {
    public static function index(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];

        $noticias = Noticia::all();

        // Render a la vista
        $router->render('admin/general', [
            'titulo_pestaña' => 'Noticias',
            'titulo_page' => 'Noticias',
            'noticias' => $noticias,
            'user_name' => $user_name,
        ]);
    }

    public static function crear(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $alertas = [];
        $noticia = new Noticia;
        $tipo = 'noticia';
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $_POST['time2'] = ($_POST['time2'] === '') ? null : $_POST['time2'];

            // Leer enlace
            $noticia->sincronizar($_POST);
            
            // Validar
            $alertas = $noticia->validar();
    
            // Guardar el registro
            if (empty($alertas)) {
                // Guardar en la DB
                $resultado = $noticia->crear();
    
                if($resultado) {
                    header('Location: /dashboard/noticias');
                }
            }
        }
    
        $router->render('admin/crear', [
            'titulo_pestaña' => 'Noticias',
            'titulo_page' => 'Noticias',
            'alertas' => $alertas,
            'noticias' => $noticia,
            'user_name' => $user_name,
            'tipo' => $tipo,
        ]);
    }

    public static function edit(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $alertas = [];
        
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
            $noticia->time2 = ($_POST['time2'] !== '') ? $_POST['time2'] : null;

            // Actualizar la información
            $noticia->sincronizar($_POST);
    
            // Validar
            $alertas = $noticia->validar();
    
            // Guardar el registro
            if(empty($alertas) && $noticia->actualizar()) {
                header('Location: /dashboard/noticias');
            }
        }
    
        $router->render('admin/editar', [
            'titulo_pestaña' => 'Dashboard',
            'titulo_page' => 'Dashboard',
            'user_name' => $user_name,
            'alertas' => $alertas,
        ]);
    }

    public static function delete() {
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
    }
}