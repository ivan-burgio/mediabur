<?php

namespace Controllers;

use Model\Guia;
use Model\User;
use MVC\Router;
use Model\Noticia;
use Model\Analisis;
use Model\Articulo;

class DashboardController {
    public static function index(Router $router) {
        session_start();
        isAuth();

        $user_name = $_SESSION['name'];

        $noticias = Noticia::all();
        $guias = Guia::all();
        $articulos = Articulo::all();
        $analisis = Analisis::all();

        // Render a la vista
        $router->render('admin/dashboard', [
            'titulo_pestaña' => 'Dashboard',
            'titulo_page' => 'Dashboard',
            'user_name' => $user_name,
        ]);
    }
}