<div class="dashboard__contenido--general">
    <div class="dashboard__linea--header">
        <div class="dashboard__linea-elem">ID</div>
        <div class="dashboard__linea-elem">Titulo</div>
        <div class="dashboard__linea-elem">Portada</div>
        <div class="dashboard__linea-elem">Tipo</div>
        <div class="dashboard__linea-elem">Fecha</div>
        <div class="dashboard__linea-elem">Creador</div>
        <div class="dashboard__linea-elem">Categoria</div>
        <div class="dashboard__linea-elem">Activo</div>
        <div class="dashboard__linea-elem">Acciones</div>
    </div>

    <?php
    foreach ($publicaciones as $publicacion) {
    ?>
        <div class="dashboard__linea">
            <div class="dashboard__linea-elem"><?php echo $publicacion->id; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->titulo; ?></div>
            <div class="dashboard__linea-elem"><img src="<?php echo $publicacion->portada; ?>"></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->tipo; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->fecha; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->creador; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->categoria; ?></div>
            <div class="dashboard__linea-elem">
                <?php echo ($publicacion->activo == 1) ?
                    '<i class="fa-solid fa-check fa-xl" style="color: rgb(0, 120, 0);"></i>'
                    :
                    '<i class="fa-solid fa-xmark fa-xl" style="color: rgb(120, 0, 0);"></i>';
                ?>
            </div>
            <div class="dashboard__linea-elem">
                <a href="/<?php echo $url; ?>/<?php echo $tipo ?>?id=<?php echo $publicacion->id ?>" target="_blank">
                    <i class="fa-solid fa-eye fa-xl" style="color: rgb(0, 120, 0);"></i>
                </a>

                <a href="/dashboard/<?php echo $url; ?>/editar?id=<?php echo $publicacion->id ?>" target="_blank">
                    <i class="fa-solid fa-pen-to-square fa-xl" style="color: rgb(0, 0, 120);"></i>
                </a>

                <!-- Comentado por el momento, no se tiene planeado eliminar las publicaciones, simplemente se deja como activa o no.
                <a href="/dashboard/<?php echo $url; ?>/eliminar?id=<?php echo $publicacion->id ?>" target="_blank">
                    <i class="fa-solid fa-trash fa-xl" style="color: rgb(120, 0, 0);"></i>
                </a>
                -->
            </div>
        </div>
    <?php
    }
    ?>
</div>