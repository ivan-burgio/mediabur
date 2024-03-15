<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">

        <?php
            foreach ($novedades as $novedad) {
                echo tarjetaClasicaTemplate($novedad->portada, $novedad->titulo, $novedad->categoria, $novedad->fecha);
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
        <?php echo tarjetaAltTemplate('', 'Titulos de tarjeta alternativa 1', 'noticias'); ?>

        <?php echo tarjetaAltTemplate('', '¿Veremos el Xbox Game Pass en Nintendo Switch? Microsoft por fin se ha pronunciado', 'noticias'); ?>

        <?php echo tarjetaAltTemplate('', 'Titulos de tarjeta alternativa 3', 'noticias'); ?>
    </div>
</div>

<div class="ad2">Publicidad</div>