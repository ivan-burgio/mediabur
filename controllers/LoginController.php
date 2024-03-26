<?php

namespace Controllers;

use Model\User;
use MVC\Router;

class LoginController {
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
                        header('Location: /');
                    } else {
                        User::setAlerta('error', 'La contraseña es incorrecta');
                    }
                }
            }
        }

        $alertas = User::getAlertas();

        // Render a la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesion',
            'titulo' => 'Iniciar Sesion',
            'alertas' => $alertas,
        ]);
    }

    public static function logout() {
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
}