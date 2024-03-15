<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php
                foreach ($analisis as $anal) {
                    echo tarjetaClasicaTemplate($anal->portada, $anal->titulo, $anal->categoria, $anal->fecha);
                }
            ?>
        </div>
    </div>

    <div class="ad">Publicidad</div>
</div>