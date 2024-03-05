<?php

namespace Controllers;

use Model\Guia;
use MVC\Router;

class GuiaController {
    public static function index(Router $router) {
        session_start();
        isAuth();

        $user_name = $_SESSION['name'];
        
        $guias = Guia::all();

        // Render a la vista
        $router->render('admin/dashboard', [
            'titulo_pestaña' => 'Dashboard',
            'titulo_page' => 'Dashboard',
            'user_name' => $user_name,
        ]);
    }
}