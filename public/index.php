<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\GuiaController;
use Controllers\NoticiaController;
use Controllers\AnalisisController;
use Controllers\ArticuloController;
use Controllers\LoginController;
use Controllers\PagesController;
use Controllers\DashboardController;
use Model\Analisis;
use Model\Articulo;

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
$router->get('/dashboard', [DashboardController::class, 'index']);

// Noticias
$router->get('/dashboard/noticias', [NoticiaController::class, 'index']);
$router->get('/dashboard/noticias/crear', [NoticiaController::class, 'crear']);
$router->post('/dashboard/noticias/crear', [NoticiaController::class, 'crear']);
$router->get('/dashboard/noticias/editar', [NoticiaController::class, 'editar']);
$router->post('/dashboard/noticias/editar', [NoticiaController::class, 'editar']);
$router->post('/dashboard/noticias/eliminar', [NoticiaController::class, 'eliminar']);

// Guias
$router->get('/dashboard/guias', [GuiaController::class, 'index']);
$router->get('/dashboard/guias/crear', [GuiaController::class, 'crear']);
$router->post('/dashboard/guias/crear', [GuiaController::class, 'crear']);
$router->get('/dashboard/guias/editar', [GuiaController::class, 'editar']);
$router->post('/dashboard/guias/editar', [GuiaController::class, 'editar']);
$router->post('/dashboard/guias/eliminar', [GuiaController::class, 'eliminar']);

// Articulos
$router->get('/dashboard/articulos', [ArticuloController::class, 'index']);
$router->get('/dashboard/articulos/crear', [ArticuloController::class, 'crear']);
$router->post('/dashboard/articulos/crear', [ArticuloController::class, 'crear']);
$router->get('/dashboard/articulos/editar', [ArticuloController::class, 'editar']);
$router->post('/dashboard/articulos/editar', [ArticuloController::class, 'editar']);
$router->post('/dashboard/articulos/eliminar', [ArticuloController::class, 'eliminar']);

// Analisis
$router->get('/dashboard/analisis', [AnalisisController::class, 'index']);
$router->get('/dashboard/analisis/crear', [AnalisisController::class, 'crear']);
$router->post('/dashboard/analisis/crear', [AnalisisController::class, 'crear']);
$router->get('/dashboard/analisis/editar', [AnalisisController::class, 'editar']);
$router->post('/dashboard/analisis/editar', [AnalisisController::class, 'editar']);
$router->post('/dashboard/analisis/eliminar', [AnalisisController::class, 'eliminar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();