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
        $alertas = [];

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
            'alertas' => $alertas,
        ]);
    }

    public static function noticias(Router $router) {
        session_start();
        isAdmin();

        $noticias = array_reverse(Noticia::all());

        // Render a la vista
        $router->render('pages/noticias', [
            'titulo' => 'Noticias',
            'noticias' => $noticias,
        ]);
    }

    public static function analisis(Router $router) {
        session_start();
        isAdmin();

        $analisis = array_reverse(Analisis::all());

        // Render a la vista
        $router->render('pages/analisis', [
            'titulo' => 'Analisis',
            'analisis' => $analisis,
        ]);
    }

    public static function articulos(Router $router) {
        session_start();
        isAdmin();

        $articulos = array_reverse(Articulo::all());

        // Render a la vista
        $router->render('pages/articulos', [
            'titulo' => 'Articulos',
            'articulos' => $articulos,
        ]);
    }

    public static function guias(Router $router) {
        session_start();
        isAdmin();

        $guias = array_reverse(Guia::all());

        // Render a la vista
        $router->render('pages/guias', [
            'titulo' => 'Guias',
            'guias' => $guias,
        ]);
    }
}
