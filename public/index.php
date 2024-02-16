<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PagesController;

$router = new Router();

// Pages
$router->get('/', [PagesController::class, 'novedades']);
$router->get('/noticias', [PagesController::class, 'noticias']);
$router->get('/analisis', [PagesController::class, 'analisis']);
$router->get('/articulos', [PagesController::class, 'articulos']);
$router->get('/guias', [PagesController::class, 'guias']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();