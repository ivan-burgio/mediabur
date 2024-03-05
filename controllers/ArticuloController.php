<?php

namespace Controllers;

use MVC\Router;
use Model\Articulo;

class ArticuloController {
    public static function index(Router $router) {
        session_start();
        isAuth();

        $user_name = $_SESSION['name'];
        
        $articulos = Articulo::all();

        // Render a la vista
        $router->render('admin/dashboard', [
            'titulo_pestaña' => 'Dashboard',
            'titulo_page' => 'Dashboard',
            'user_name' => $user_name,
        ]);
    }
}