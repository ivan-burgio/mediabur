<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PagesController;

$router = new Router();

// Pages
$router->get('/', [PagesController::class, 'index']);
$router->get('/noticias', [PagesController::class, 'noticias']);
$router->get('/noticias', [PagesController::class, 'noticias']);
$router->get('/noticias', [PagesController::class, 'noticias']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();