<div class="main_contenido">
    <div class="main_principal">
<<<<<<< HEAD
        <h1><?php echo $titulo; ?></h1>
=======
        <?php if ($publi->activo == 0) { ?>
            <p class="publicacion__no-activa">PUBLICACIÓN NO ACTIVA</p>
        <?php } ?>


        <div class="publicacion">
            <h1><?php echo $titulo; ?></h1>
            <img src="<?php echo $publi->portada ?>" alt="<?php echo $publi->titulo; ?>" loading="lazy">
            <?php echo $publi->texto; ?>
        </div>

>>>>>>> ae7b193 (Mejoras visuales y Responsive)
    </div>

    <div class="ad d-none d-md-block">Publicidad</div>
</div>