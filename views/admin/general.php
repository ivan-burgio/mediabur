<div class="dashboard__contenido">
    <div class="dashboard__linea--header">
        <div class="dashboard__linea-elem">ID</div>
        <div class="dashboard__linea-elem">Titulo</div>
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
            <div class="dashboard__linea-elem"><?php echo $publicacion->tipo; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->fecha; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->creador; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->categoria; ?></div>
            <div class="dashboard__linea-elem"><?php echo $publicacion->activo; ?></div>
            <div class="dashboard__linea-elem">Acciones</div>
        </div>
    <?php
    }
    ?>
</div>