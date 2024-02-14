<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth(): void
{
    if (!isset($_SESSION['login'])) {
        header('Location: /login');
    }
}

function aos_animacion(): void
{
    $efectos = ['flip-left', 'flip-right', 'flip-up', 'flip-down'];
    $efecto = array_rand($efectos, 1);

    $tiempos = ['500', '750', '1000', '1250', '1500',];
    $tiempo = array_rand($tiempos, 1);

    echo ' data-aos="' . $efectos[$efecto] . '" data-aos-duration="' . $tiempos[$tiempo] . '" ';
}

function imprimirEnlace($ruta, $nombre)
{
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'active' : '';
    echo '<a href="' . $ruta . '" class="nav__link ' . $clase . '">' . $nombre . '</a>';
}

function imprimirEnlaceAdmin($ruta, $nombre)
{
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'active' : '';
    echo '<a href="' . $ruta . '" class="sidebar__nav-link ' . $clase . '">' . $nombre . '</a>';
}

function nameActivo($ruta)
{
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'active' : '';
    echo '<p class="nav__name ' . $clase . '">Ivan Burgio</p>';
}

function agregarBrDespuesDePunto($texto)
{
    // Reemplaza los puntos con punto y salto de línea
    $textoConBr = str_replace('.', '.<br>', $texto);
    return $textoConBr;
}

function formatarFecha($fecha)
{
    $timestamp = strtotime($fecha);
    return date('M. Y', $timestamp);
}
