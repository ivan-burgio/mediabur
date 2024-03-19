<?php

namespace Controllers;

use MVC\Router;
use Model\Noticia;
use Model\Todo;

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
            $noticias = array_reverse(Noticia::buscar($terminoBusqueda));
        } else {
            $noticias = array_reverse(Noticia::all());
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
        $todo = new Todo;
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

                // Guardar en la tabla general
                $creado = Noticia::get(1);

                $todo->id_publicacion = $creado[0]->id;
                $todo->titulo_publicacion = $creado[0]->titulo;
                $todo->tipo_publicacion = $creado[0]->tipo;
                $todo->fecha_publicacion = $creado[0]->fecha;
                $todo->categoria_publicacion = $creado[0]->categoria;
                $todo->activo_publicacion = $creado[0]->activo;

                $todo->crear();
    
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

            $noticia->activo = isset($_POST['activo']) ? 1 : 0;

            // Actualizar la información
            $noticia->sincronizar($_POST);
    
            // Validar
            $alertas = $noticia->validar();
    
            // Guardar el registro
            if(empty($alertas)) {
                $noticia->actualizar();
                
                // Actualizar en la tabla general
                $actualizado = Noticia::find($id);
                $todo = Todo::buscarId($id, 'Noticia');
                
                $todo->titulo_publicacion = $creado[0]->titulo;
                $todo[0]->fecha_publicacion = $actualizado->fecha;
                $todo[0]->categoria_publicacion = $actualizado->categoria;
                $todo[0]->activo_publicacion = $actualizado->activo;
                
                $todo[0]->actualizar();

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