<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php
                foreach ($publicaciones as $publi) {
                    if($publi->activo == '1') {
                        echo tarjetaClasicaTemplate($publi->portada, $publi->titulo, $publi->categoria, $publi->fecha);
                    }
                }
            ?>
        </div>
    </div>

    <div class="ad">Publicidad</div>
</div>