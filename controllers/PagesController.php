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
    public static function novedades(Router $router)
    {
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

    public static function noticias(Router $router)
    {
        session_start();
        isAdmin();

        $noticias = Noticia::all();

        // Render a la vista
        $router->render('pages/noticias', [
            'titulo' => 'Noticias',
        ]);
    }

    public static function analisis(Router $router)
    {
        session_start();
        isAdmin();

        $analisis = Analisis::all();

        // Render a la vista
        $router->render('pages/analisis', [
            'titulo' => 'Analisis',
        ]);
    }

    public static function articulos(Router $router)
    {
        session_start();
        isAdmin();

        $articulos = Articulo::all();

        // Render a la vista
        $router->render('pages/articulos', [
            'titulo' => 'Articulos',
        ]);
    }

    public static function guias(Router $router)
    {
        session_start();
        isAdmin();

        $guias = Guia::all();

        // Render a la vista
        $router->render('pages/guias', [
            'titulo' => 'Guias',
        ]);
    }
}
