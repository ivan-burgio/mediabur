<?php

namespace Controllers;

use MVC\Router;

class PagesController {
    public static function index(Router $router) {

        // Render a la vista
        $router->render('pages/intro', [
            'titulo_pestaña' => 'Noticias',
        ]);
    }
}