<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php
                foreach ($noticias as $noticia) {
                    if($noticia->activo == '1') {
                        echo tarjetaClasicaTemplate($noticia->portada, $noticia->titulo, $noticia->categoria, $noticia->fecha);
                    }
                }
            ?>
        </div>
    </div>

    <div class="ad">Publicidad</div>
</div>