<?php

namespace Controllers;

use Model\User;
use MVC\Router;
use Model\Tech;
use Model\Career;
use Model\Proyect;

class DashboardController {
    public static function index(Router $router) {
        session_start();
        isAuth();
        $id = $_SESSION['id'];

        $proyects = Proyect::all();
        $techs = Tech::all();
        $careers = Career::all();

        // Render a la vista
        $router->render('admin/dashboard', [
            'titulo_pestaña' => 'Dashboard',
            'titulo_page' => 'Dashboard',
            'proyects' => $proyects,
            'techs' => $techs,
            'careers' => $careers,
        ]);
    }

    public static function login(Router $router) {
        $alertas = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User($_POST);
            $alertas = $user->validarLogin();

            if(empty($alertas)) {
                // Verificar si el usuario existe
                $user = User::where('email', $user->email);

                if(!$user) {
                    User::setAlerta('error', 'El usuario no existe');
                } else {
                    // El usuario existe
                    if(password_verify($_POST['password'], $user->password)) {
                        // Iniciar sesión
                        session_start();
                        $_SESSION['id'] = $user->id;
                        $_SESSION['name'] = $user->name;
                        $_SESSION['email'] = $user->email;
                        $_SESSION['login'] = true;

                        // Redireccionar
                        header('Location: /dashboard');
                    } else {
                        User::setAlerta('error', 'La contraseña es incorrecta');
                    }
                }
            }
        }

        $alertas = User::getAlertas();

        // Render a la vista
        $router->render('auth/login', [
            'titulo_pestaña' => 'Login',
            'titulo_page' => 'Login',
            'alertas' => $alertas
        ]);
    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
}