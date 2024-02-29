<?php

namespace Controllers;

use Model\Guia;
use MVC\Router;
use Model\Noticia;
use Model\Novedad;
use Model\Analisis;
use Model\Articulo;

class PagesController {
    public static function novedades(Router $router) {
        session_start();
        isAuth();

        $ultimasNovedades = Novedad::get(3);
        $ultimasNoticias = Noticia::get(3);

        // Render a la vista
        $router->render('pages/novedades', [
            'titulo_pestaña' => 'Novedades',
            'titulo_pagina' => 'Ultimas Novedades',
        ]);
    }

    public static function noticias(Router $router) {
        session_start();
        isAuth();

        $noticias = Noticia::all();

        // Render a la vista
        $router->render('pages/noticias', [
            'titulo_pestaña' => 'Noticias',
            'titulo_pagina' => 'Noticias',
        ]);
    }

    public static function analisis(Router $router) {
        session_start();
        isAuth();

        $analisis = Analisis::all();

        // Render a la vista
        $router->render('pages/analisis', [
            'titulo_pestaña' => 'Analisis',
            'titulo_pagina' => 'Analisis',
        ]);
    }

    public static function articulos(Router $router) {
        session_start();
        isAuth();

        $articulos = Articulo::all();

        // Render a la vista
        $router->render('pages/articulos', [
            'titulo_pestaña' => 'Articulos',
            'titulo_pagina' => 'Articulos',
        ]);
    }

    public static function guias(Router $router) {

        $guias = Guia::all();

        // Render a la vista
        $router->render('pages/guias', [
            'titulo_pestaña' => 'Guias',
            'titulo_pagina' => 'Guias',
        ]);
    }
}