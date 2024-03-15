<div class="main_contenido">
    <div class="main_principal">
        <h1><?php echo $titulo; ?></h1>

        <div class="tarjetas">
            <?php
                foreach ($guias as $guia) {
                    if($guia->activo == '1') {
                        echo tarjetaClasicaTemplate($guia->portada, $guia->titulo, $guia->categoria, $guia->fecha);
                    }
                }
            ?>
        </div>
    </div>

    <div class="ad">Publicidad</div>
</div>