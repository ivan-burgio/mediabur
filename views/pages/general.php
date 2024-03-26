<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php if (empty($publicaciones)) { ?>
                <p>No hay publicaciónes de este tipo creadas.</p>
            <?php } ?>

            <?php
            foreach ($publicaciones as $publi) {
                if ($publi->activo == '1') {
                    echo tarjetaClasicaTemplate($publi->id, $publi->portada, $publi->titulo, $publi->categoria, $publi->fecha, $publi->tipo);
                }
            }
            ?>
        </div>
    </div>

    <div class="ad d-none d-md-block">Publicidad</div>
</div>