<div class="main_contenido">
    <div class="main_principal">
        <?php if ($publi->activo == 0) { ?>
            <p class="publicacion__no-activa">PUBLICACIÓN NO ACTIVA</p>
        <?php } ?>


        <div class="publicacion">
            <h1><?php echo $titulo; ?></h1>
            <img src="<?php echo $publi->portada ?>" alt="<?php echo $publi->titulo; ?>" loading="lazy">
            <?php echo $publi->texto; ?>
        </div>

    </div>

    <div class="ad d-none d-md-block">Publicidad</div>
</div>