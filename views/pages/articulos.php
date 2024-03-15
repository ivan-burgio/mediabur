<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php
                foreach ($articulos as $articulo) {
                    if($articulo->activo == '1') {
                        echo tarjetaClasicaTemplate($articulo->portada, $articulo->titulo, $articulo->categoria, $articulo->fecha);
                    }
                }
            ?>
        </div>
    </div>

    <div class="ad">Publicidad</div>
</div>