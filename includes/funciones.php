<?php

function debuguear($variable): string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html): string {
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth(): void {
    if (!isset($_SESSION['login'])) {
        header('Location: /login');
    }
}

function isAdmin() {
    if (isset($_SESSION['login'])) {
        echo '
            <div class="globo">
                <i class="globo__icono fa-solid fa-gear""></i>
            </div>
        ';
    }
}

function aos_animacion(): void {
    $efectos = ['flip-left', 'flip-right', 'flip-up', 'flip-down'];
    $efecto = array_rand($efectos, 1);

    $tiempos = ['500', '750', '1000', '1250', '1500',];
    $tiempo = array_rand($tiempos, 1);

    echo ' data-aos="' . $efectos[$efecto] . '" data-aos-duration="' . $tiempos[$tiempo] . '" ';
}

function imprimirEnlace($ruta, $nombre) {
    $clase = ($_SERVER['REQUEST_URI'] === $ruta) ? 'activo' : '';
    echo '
        <a href="' . $ruta . '" class="nav-link ' . $clase . '">' . $nombre . '</a>
    ';
}

function agregarBrDespuesDePunto($texto) {
    // Reemplaza los puntos con punto y salto de línea
    $textoConBr = str_replace('.', '.<br>', $texto);
    return $textoConBr;
}

function formatarFecha($fecha) {
    $timestamp = strtotime($fecha);
    return date('M. Y', $timestamp);
}

function tarjetaClasicaTemplate($img, $titulo, $tipo, $fecha) {
    echo '
        <div class="tarjeta-clasica">
            <img class="tarjeta-clasica__img" src="' . $img . '" alt="imagen del articulo">

            <div class="tarjeta-clasica__contenido">
                <h3 class="tarjeta-clasica__titulo">' . $titulo . '</h3>

                <p class="tarjeta-clasica__tipo">' . $tipo . '</p>
                <p class="tarjeta-clasica__fecha">' . $fecha . '</p>
            </div>
        </div>
    ';
}

function tarjetaAltTemplate($img, $titulo, $tipo) {
    echo '
        <div class="tarjeta-alt">
            <img class="tarjeta-alt__img" src="' . $img . '" alt="imagen del articulo">

            <div class="tarjeta-alt__contenido">
                <p class="tarjeta-alt__tipo">' . $tipo . '</p>
                <h3 class="tarjeta-alt__titulo">' . $titulo . '</h3>
            </div>
        </div>
    ';
}