<?php

namespace Controllers;

use MVC\Router;
use Model\Guia;
use Model\Todo;

class GuiaController {
    public static function index(Router $router) {
        session_start();
        isAuth();
        $user_name = $_SESSION['name'];
        $url = 'guias';
        $tipo = 'guia';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }

        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $guias = Guia::buscar($terminoBusqueda);
        } else {
            $guias = Guia::all();
        }

        // Render a la vista
        $router->render('admin/general', [
            'titulo' => 'Guias',
            'publicaciones' => $guias,
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
        $guia = new Guia;
        $todo = new Todo;
        $url = 'guias';
        $tipo = 'guia';
        $accion = 'Crear';
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fechaActual = date('Y-m-d');

            $guia->creador = $user_name;
            $guia->fecha = $fechaActual;

            // Leer enlace
            $guia->sincronizar($_POST);
            
            // Validar
            $alertas = $guia->validar();
    
            // Guardar el registro
            if (empty($alertas)) {
                // Guardar en la DB
                $resultado = $guia->crear();

                // Guardar en la tabla general
                $creado = Guia::get(1);

                $todo->id_publicacion = $creado[0]->id;
                $todo->tipo_publicacion = $creado[0]->tipo;
                $todo->fecha_publicacion = $creado[0]->fecha;
                $todo->categoria_publicacion = $creado[0]->categoria;
                $todo->activo_publicacion = $creado[0]->activo;

                $todo->crear();
    
                if ($resultado) {
                    header('Location: /dashboard/guias');
                }
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Crear Guia',
            'alertas' => $alertas,
            'publicacion' => $guia,
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
        $url = 'guias';
        $tipo = 'guia';
        $accion = 'Editar';
        
        // Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
    
        if(!$id) {
            header('Location: /dashboard/guias');
        }
    
        // Obtener guia a editar
        $guia = Guia::find($id);
    
        if(!$guia) {
            header('Location: /dashboard/guias');
        }
    
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(empty($guia->creador)) {
                $guia->creador = $user_name;

            }
            if(empty($guia->fecha)) {
                $fechaActual = date('Y-m-d');
                $guia->fecha = $fechaActual;
            }

            $guia->activo = isset($_POST['activo']) ? 1 : 0;

            // Actualizar la información
            $guia->sincronizar($_POST);
    
            // Validar
            $alertas = $guia->validar();
    
            // Guardar el registro
            if(empty($alertas)) {
                $guia->actualizar();
                
                // Actualizar en la tabla general
                $actualizado = Guia::find($id);
                $todo = Todo::buscarId($id);
                
                $todo[0]->fecha_publicacion = $actualizado->fecha;
                $todo[0]->categoria_publicacion = $actualizado->categoria;
                $todo[0]->activo_publicacion = $actualizado->activo;
                
                $todo[0]->actualizar();

                header('Location: /dashboard/guias');
            }
        }
    
        $router->render('admin/form', [
            'titulo' => 'Editar Guia',
            'alertas' => $alertas,
            'publicacion' => $guia,
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
            $guia = Guia::find($id);
    
            if ($guia && $guia->eliminar()) {
                header('Location: /dashboard/guias');
            } else {
                header('Location: /dashboard/guias');
            }
        }
    } */
}