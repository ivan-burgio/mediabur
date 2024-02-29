<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
use Controllers\PagesController;

$router = new Router();

// Pages
$router->get('/', [PagesController::class, 'novedades']);
$router->get('/noticias', [PagesController::class, 'noticias']);
$router->get('/analisis', [PagesController::class, 'analisis']);
$router->get('/articulos', [PagesController::class, 'articulos']);
$router->get('/guias', [PagesController::class, 'guias']);

// Login
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Dashboard

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();