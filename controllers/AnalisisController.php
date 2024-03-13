<?php

namespace Controllers;

use MVC\Router;
use Model\Analisis;

class AnalisisController {
    public static function index(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $url = 'analisis';
        $tipo = 'analisis';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }

        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $analisis = Analisis::buscar($terminoBusqueda);
        } else {
            $analisis = Analisis::all();
        }

        // Render a la vista
        $router->render('admin/general', [
            'titulo' => 'Analisis',
            'publicaciones' => $analisis,
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
        $analisis = new Analisis;
        $url = 'analisis';
        $tipo = 'analisis';
        $accion = 'Crear';
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fechaActual = date('Y-m-d');

            $analisis->creador = $user_name;
            $analisis->fecha = $fechaActual;

            // Leer enlace
            $analisis->sincronizar($_POST);
            
            // Validar
            $alertas = $analisis->validar();
    
            // Guardar el registro
            if (empty($alertas)) {
                // Guardar en la DB
                $resultado = $analisis->crear();
    
                if ($resultado) {
                    header('Location: /dashboard/analisis');
                }
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Crear Analisis',
            'alertas' => $alertas,
            'publicacion' => $analisis,
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
        $url = 'analisis';
        $tipo = 'analisis';
        $accion = 'Editar';
        
        // Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if(!$id) {
            header('Location: /dashboard/analisis');
        }
    
        // Obtener analisis a editar
        $analisis = Analisis::find($id);
    
        if(!$analisis) {
            header('Location: /dashboard/analisis');
        }
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(empty($analisis->creador)) {
                $analisis->creador = $user_name;

            }
            if(empty($analisis->fecha)) {
                $fechaActual = date('Y-m-d');
                $analisis->fecha = $fechaActual;
            }

            // Actualizar la información
            $analisis->sincronizar($_POST);
    
            // Validar
            $alertas = $analisis->validar();
    
            // Guardar el registro
            if(empty($alertas) && $analisis->actualizar()) {
                header('Location: /dashboard/analisis');
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Editar Analisis',
            'alertas' => $alertas,
            'publicacion' => $analisis,
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
            $analisis = Analisis::find($id);
    
            if ($analisis && $analisis->eliminar()) {
                header('Location: /dashboard/analisis');
            } else {
                header('Location: /dashboard/analisis');
            }
        }
    } */
}