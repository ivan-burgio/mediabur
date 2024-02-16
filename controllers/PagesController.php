<?php

namespace Controllers;

use MVC\Router;

class PagesController {
    public static function novedades(Router $router) {

        // Render a la vista
        $router->render('pages/novedades', [
            'titulo_pestaña' => 'Novedades',
            'titulo_pagina' => 'Ultimas Novedades',
        ]);
    }

    public static function noticias(Router $router) {

        // Render a la vista
        $router->render('pages/noticias', [
            'titulo_pestaña' => 'Noticias',
            'titulo_pagina' => 'Noticias',
        ]);
    }

    public static function analisis(Router $router) {

        // Render a la vista
        $router->render('pages/analisis', [
            'titulo_pestaña' => 'Analisis',
            'titulo_pagina' => 'Analisis',
        ]);
    }

    public static function articulos(Router $router) {

        // Render a la vista
        $router->render('pages/articulos', [
            'titulo_pestaña' => 'Articulos',
            'titulo_pagina' => 'Articulos',
        ]);
    }

    public static function guias(Router $router) {

        // Render a la vista
        $router->render('pages/guias', [
            'titulo_pestaña' => 'Guias',
            'titulo_pagina' => 'Guias',
        ]);
    }
}