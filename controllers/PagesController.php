<?php

namespace Controllers;

use Model\Guia;
use MVC\Router;
use Model\Noticia;
use Model\Todo;
use Model\Analisis;
use Model\Articulo;

class PagesController
{
    public static function novedades(Router $router) {
        session_start();
        isAdmin();

        $ultimasNovedades = Todo::get(3);
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

        $ultimasNoticias = Noticia::get(3);

        // Render a la vista
        $router->render('pages/novedades', [
            'titulo' => 'Novedades',
            'novedades' => $novedades,
            'noticias' => $ultimasNoticias,
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
        $router->render('pages/noticias', [
            'titulo' => 'Noticias',
            'noticias' => $noticias,
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
        $router->render('pages/analisis', [
            'titulo' => 'Analisis',
            'analisis' => $analisis,
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
        $router->render('pages/articulos', [
            'titulo' => 'Articulos',
            'articulos' => $articulos,
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
        $router->render('pages/guias', [
            'titulo' => 'Guias',
            'guias' => $guias,
            'url' => $url,
            'tipo' => $tipo,
        ]);
    }
}
