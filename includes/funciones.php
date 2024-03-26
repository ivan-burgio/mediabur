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
        include __DIR__ . '/../views/admin-templates/globo.php';
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

function tarjetaClasicaTemplate($id, $portada, $titulo, $categoria, $fecha, $tipo) {
    // Obtener la fecha actual
    $fechaActual = new DateTime();

    // Convertir la fecha en formato "YYYY-MM-DD" a objeto DateTime
    $fechaPublicacion = new DateTime($fecha);

    // Calcular la diferencia de días
    $diferencia = $fechaPublicacion->diff($fechaActual);

    // Mostrar la diferencia de días de manera amigable
    $mensajeFecha = '';
    if ($diferencia->days == 0) {
        $mensajeFecha = 'Hoy';
    } elseif ($diferencia->days == 1) {
        $mensajeFecha = 'Publicado hace 1 día';
    } else {
        $mensajeFecha = 'Publicado hace ' . $diferencia->days . ' días';
    }

    echo '
        <a class="tarjeta-clasica" href="/publicacion?id=' . $id .'&tipo=' . $tipo . '">
            <img class="tarjeta-clasica__img" src="' . $portada . '" alt="Portada de ' . $titulo . '" loading="lazy">

            <div class="tarjeta-clasica__contenido">
                <p class="tarjeta-clasica__tipo">' . $categoria . '</p>

                <h3 class="tarjeta-clasica__titulo">' . $titulo . '</h3>
                
                <p class="tarjeta-clasica__fecha">' . $mensajeFecha . '</p>
            </div>
        </a>
    ';
}

function tarjetaAltTemplate($id, $portada, $titulo, $categoria, $tipo, $fecha) {
    // Obtener la fecha actual
    $fechaActual = new DateTime();

    // Convertir la fecha en formato "YYYY-MM-DD" a objeto DateTime
    $fechaPublicacion = new DateTime($fecha);

    // Calcular la diferencia de días
    $diferencia = $fechaPublicacion->diff($fechaActual);

    // Mostrar la diferencia de días de manera amigable
    $mensajeFecha = '';
    if ($diferencia->days == 0) {
        $mensajeFecha = 'Hoy';
    } elseif ($diferencia->days == 1) {
        $mensajeFecha = 'Publicado hace 1 día';
    } else {
        $mensajeFecha = 'Publicado hace ' . $diferencia->days . ' días';
    }

    echo '
        <a class="tarjeta-alt" href="/publicacion?id=' . $id .'&tipo=' . $tipo . '">
            <img class="tarjeta-alt__img" src="' . $portada . '" alt="Portada de ' . $titulo . '" loading="lazy">

            <div class="tarjeta-alt__contenido">
                <p class="tarjeta-alt__tipo">' . $categoria . '</p>

                <h3 class="tarjeta-alt__titulo">' . $titulo . '</h3>

                <p class="tarjeta-clasica__fecha">' . $mensajeFecha . '</p>
            </div>
        </a>
    ';
}
