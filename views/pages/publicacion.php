<div class="main_contenido">
    <div class="main_principal">
<<<<<<< HEAD
<<<<<<< HEAD
        <h1><?php echo $titulo; ?></h1>
=======
=======
>>>>>>> 55c9968f584d441d88a2ab6be40ade82b7fc7be7
        <?php if ($publi->activo == 0) { ?>
            <p class="publicacion__no-activa">PUBLICACIÓN NO ACTIVA</p>
        <?php } ?>


        <div class="publicacion">
            <h1><?php echo $titulo; ?></h1>
<<<<<<< HEAD
            <img src="<?php echo $publi->portada ?>" alt="<?php echo $publi->titulo; ?>" loading="lazy">
            <?php echo $publi->texto; ?>
        </div>

>>>>>>> ae7b193 (Mejoras visuales y Responsive)
=======
            <img src="<?php echo $publi->portada ?>" alt="<?php echo $publi->titulo; ?>">
            <?php echo $publi->texto; ?>
        </div>

>>>>>>> 55c9968f584d441d88a2ab6be40ade82b7fc7be7
    </div>

    <div class="ad d-none d-md-block">Publicidad</div>
</div>