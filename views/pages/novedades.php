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

    <div class="ad">Publicidad</div>
</div>

<div class="ad2">Publicidad</div>

<div class="main_principal">
    <h3>Ultimas Noticias</h3>

    <div class="novedades-noticias">
        <?php
            foreach ($noticias as $noticia) {
                if($noticia->activo == '1') {
                    echo tarjetaAltTemplate($noticia->id, $noticia->portada, $noticia->titulo, $noticia->categoria, $novedad->tipo);
                }
            }
        ?>
    </div>
</div>

<div class="ad2">Publicidad</div>