<?php

namespace Controllers;

use MVC\Router;
use Model\Articulo;
use Model\Todo;

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
            $articulos = array_reverse(Articulo::buscar($terminoBusqueda));
        } else {
            $articulos = array_reverse(Articulo::all());
        }

        // Render a la vista
        $router->render('admin/general', [
            'titulo' => 'Articulos',
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
        $todo = new Todo;
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

                // Guardar en la tabla general
                $creado = Articulo::get(1);

                $todo->id_publicacion = $creado[0]->id;
                $todo->titulo_publicacion = $creado[0]->titulo;
                $todo->tipo_publicacion = $creado[0]->tipo;
                $todo->fecha_publicacion = $creado[0]->fecha;
                $todo->categoria_publicacion = $creado[0]->categoria;
                $todo->activo_publicacion = $creado[0]->activo;

                $todo->crear();
    
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

            $articulo->activo = isset($_POST['activo']) ? 1 : 0;

            // Actualizar la información
            $articulo->sincronizar($_POST);
    
            // Validar
            $alertas = $articulo->validar();
    
            // Guardar el registro
            if(empty($alertas)) {
                $articulo->actualizar();
                
                // Actualizar en la tabla general
                $actualizado = Articulo::find($id);
                $todo = Todo::buscarId($id, 'Articulo');
                
                $todo->titulo_publicacion = $creado[0]->titulo;
                $todo[0]->fecha_publicacion = $actualizado->fecha;
                $todo[0]->categoria_publicacion = $actualizado->categoria;
                $todo[0]->activo_publicacion = $actualizado->activo;
                
                $todo[0]->actualizar();

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