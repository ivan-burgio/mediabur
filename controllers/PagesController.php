<?php

namespace Controllers;

use Model\Guia;
use MVC\Router;
use Model\Noticia;
use Model\Todo;
use Model\Analisis;
use Model\Articulo;

class PagesController {
    public static function novedades(Router $router) {
        session_start();
        isAdmin();
        $url = 'novedades';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }
    
        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $ultimasNovedades = array_reverse(Todo::buscar($terminoBusqueda));
            $novedades = [];

            foreach($ultimasNovedades as $novedad) {
                $tipoPublicacion = $novedad->tipo_publicacion;
                $idPublicacion = $novedad->id_publicacion;
                
                switch($tipoPublicacion) {
                    case 'Noticia':
                        $novedades[] = Noticia::find($idPublicacion);
                        break;
                    case 'Guia':
                        $novedades[] = Guia::find($idPublicacion);
                        break;
                    case 'Articulo':
                        $novedades[] = Articulo::find($idPublicacion);
                        break;
                    case 'Analisis':
                        $novedades[] = Analisis::find($idPublicacion);
                        break;
                    default:
                        break;
                }
            }
        } else {
            $ultimasNovedades = Todo::get(5);
            $novedades = [];

            foreach($ultimasNovedades as $novedad) {
                $tipoPublicacion = $novedad->tipo_publicacion;
                $idPublicacion = $novedad->id_publicacion;
                
                switch($tipoPublicacion) {
                    case 'Noticia':
                        $novedades[] = Noticia::find($idPublicacion);
                        break;
                    case 'Guia':
                        $novedades[] = Guia::find($idPublicacion);
                        break;
                    case 'Articulo':
                        $novedades[] = Articulo::find($idPublicacion);
                        break;
                    case 'Analisis':
                        $novedades[] = Analisis::find($idPublicacion);
                        break;
                    default:
                        break;
                }
            }
        }

        $ultimasNoticias = Noticia::get(3);

        // Render a la vista
        $router->render('pages/novedades', [
            'titulo' => 'Novedades',
            'novedades' => $novedades,
            'noticias' => $ultimasNoticias,
            'url' => $url,
        ]);
    }

    public static function noticias(Router $router) {
        session_start();
        isAdmin();
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
            $noticias = Noticia::get(10);
        }
    
        // Render a la vista
        $router->render('pages/general', [
            'titulo' => 'Ultimas Noticias',
            'publicaciones' => $noticias,
            'url' => $url,
            'tipo' => $tipo,
        ]);
    }    

    public static function analisis(Router $router) {
        session_start();
        isAdmin();
        $url = 'analisis';
        $tipo = 'analisis';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }

        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $analisis = array_reverse(Analisis::buscar($terminoBusqueda));
        } else {
            $analisis = Analisis::get(10);
        }

        // Render a la vista
        $router->render('pages/general', [
            'titulo' => 'Ultimos Analisis',
            'publicaciones' => $analisis,
            'url' => $url,
            'tipo' => $tipo,
        ]);
    }

    public static function articulos(Router $router) {
        session_start();
        isAdmin();
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
            $articulos = Articulo::get(10);
        }

        // Render a la vista
        $router->render('pages/general', [
            'titulo' => 'Ultimos Articulos',
            'publicaciones' => $articulos,
            'url' => $url,
            'tipo' => $tipo,
        ]);
    }

    public static function guias(Router $router) {
        session_start();
        isAdmin();
        $url = 'guias';
        $tipo = 'guia';
        $terminoBusqueda = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Establece $terminoBusqueda como el valor del formulario POST
            $terminoBusqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';
        }

        // Realizar la búsqueda en la base de datos utilizando el término de búsqueda si está configurado
        if (!empty($terminoBusqueda)) {
            $guias = array_reverse(Guia::buscar($terminoBusqueda));
        } else {
            $guias = Guia::get(10);
        }

        // Render a la vista
        $router->render('pages/general', [
            'titulo' => 'Ultimas Guias',
            'publicaciones' => $guias,
            'url' => $url,
            'tipo' => $tipo,
        ]);
    }

    public static function publicacion(Router $router) {
        session_start();
        isAdmin();
        $url = null;

        // Validar el ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!$id) {
            header('Location: /');
        }

        // Validar la tipo
        $tipo = $_GET['tipo'];
        if(!$id || empty($tipo)) {
            header('Location: /');
        }

        // Procesar la publicación según el tipo
        $publi = null;
        switch($tipo) {
            case 'Noticia':
                $publi = Noticia::find($id);
                break;
            case 'Guia':
                $publi = Guia::find($id);
                break;
            case 'Articulo':
                $publi = Articulo::find($id);
                break;
            case 'Analisis':
                $publi = Analisis::find($id);
                break;
            default:
                header('Location: /');
                break;
        }

        // Render a la vista
        $router->render('pages/publicacion', [
            'titulo' => $publi->titulo,
            'publi' => $publi,
            'tipo' => $tipo,
            'url' => $url,
        ]);
    }

    public static function sobre(Router $router) {
        session_start();
        isAdmin();
        $url = null;

        // Render a la vista
        $router->render('pages/sobre', [
            'titulo' => 'Sobre Mediabur',
            'url' => $url,
        ]);
    }

    public static function legal(Router $router) {
        session_start();
        isAdmin();
        $url = null;

        // Render a la vista
        $router->render('pages/legal', [
            'url' => $url,
        ]);
    }
}
