<?php

namespace Controllers;

use MVC\Router;
use Model\Noticia;

class NoticiaController {
    public static function index(Router $router) {
        session_start();
        isAuth();

        $user_name = $_SESSION['name'];

        $noticias = Noticia::all();

        // Render a la vista
        $router->render('admin/dashboard', [
            'titulo_pestaña' => 'Dashboard',
            'titulo_page' => 'Dashboard',
            'user_name' => $user_name,
        ]);
    }
}