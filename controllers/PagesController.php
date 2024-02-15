<?php

namespace Controllers;

use MVC\Router;

class PagesController {
    public static function index(Router $router) {

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
}