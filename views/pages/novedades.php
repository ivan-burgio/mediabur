<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php
                foreach ($novedades as $novedad) {
                    if($novedad->activo == '1') {
                        echo tarjetaClasicaTemplate($novedad->id, $novedad->portada, $novedad->titulo, $novedad->categoria, $novedad->fecha, $novedad->tipo);
                    }
                }
            ?>
        </div>
    </div>

    <div class="ad d-none d-md-block">Publicidad</div>
</div>

<div class="main_principal">
    <h3>Ultimas Noticias</h3>

    <div class="novedades-extra">
        <?php
            foreach ($noticias as $noticia) {
                if($noticia->activo == '1') {
                    echo tarjetaAltTemplate($noticia->id, $noticia->portada, $noticia->titulo, $noticia->categoria, $noticia->tipo, $noticia->fecha);
                }
            }
        ?>
    </div>
</div>

<div class="main_principal">
    <h3>Ultimos Analisis</h3>

    <div class="novedades-extra">
        <?php
            foreach ($articulos as $articulo) {
                if($articulo->activo == '1') {
                    echo tarjetaAltTemplate($articulo->id, $articulo->portada, $articulo->titulo, $articulo->categoria, $articulo->tipo, $articulo->fecha);
                }
            }
        ?>
    </div>
</div>