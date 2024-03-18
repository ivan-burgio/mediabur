<div class="dashboard__contenido--general">
    <form class="form-inline my-2 my-lg-0 d-flex flex-col" method="POST">
        <input
            class="form-control border-dark"
            type="search"
            placeholder="Busca ingresando ID, Titulo o Categoria"
            name="busqueda"
        >
        <button class="globo__pincho-x btn-search bg-light" type="submit">
            <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
        </button>

        <a href="/dashboard/<?php echo $url; ?>" class="globo__pincho-x" id="clearSearchLink">
            <i class="fa-solid fa-trash fa-lg" style="color: rgb(120, 0, 0);"></i>
        </a>
    </form>

    <div class="dashboard__linea--header">
        <div class="dashboard__linea-elem">ID</div>
        <div class="dashboard__linea-elem">Titulo</div>
        <div class="dashboard__linea-elem">Portada</div>
        <div class="dashboard__linea-elem">Fecha</div>
        <div class="dashboard__linea-elem">Creador</div>
        <div class="dashboard__linea-elem">Categoria</div>
        <div class="dashboard__linea-elem">Activo</div>
        <div class="dashboard__linea-elem">Acciones</div>
    </div>

    <?php if(empty($publicaciones)) { ?>
        <p>No hay publicaciónes de este tipo creadas.</p>
    <?php } ?>

        <?php foreach ($publicaciones as $publi) { ?>
            <div class="dashboard__linea">
                <div class="dashboard__linea-elem"><?php echo $publi->id; ?></div>
                <div class="dashboard__linea-elem"><?php echo $publi->titulo; ?></div>
                <div class="dashboard__linea-elem"><img src="<?php echo $publi->portada; ?>" alt="Portada de <?php echo $publi->titulo; ?>"></div>
                <div class="dashboard__linea-elem"><?php echo $publi->fecha; ?></div>
                <div class="dashboard__linea-elem"><?php echo $publi->creador; ?></div>
                <div class="dashboard__linea-elem"><?php echo $publi->categoria; ?></div>
                <div class="dashboard__linea-elem">
                    <?php echo ($publi->activo == 1) ?
                        '<i class="fa-solid fa-check fa-xl" style="color: rgb(0, 120, 0);"></i>'
                        :
                        '<i class="fa-solid fa-xmark fa-xl" style="color: rgb(120, 0, 0);"></i>';
                    ?>
                </div>
                <div class="dashboard__linea-elem">
                    <a href="/<?php echo $url; ?>/<?php echo $tipo ?>?id=<?php echo $publi->id ?>">
                        <i class="fa-solid fa-eye fa-xl" style="color: rgb(0, 120, 0);"></i>
                    </a>

                    <a href="/dashboard/<?php echo $url; ?>/editar?id=<?php echo $publi->id ?>">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: rgb(0, 0, 120);"></i>
                    </a>

                    <!-- Comentado por el momento, no se tiene planeado eliminar las publicaciones, simplemente se deja como activa o no.
                    <a href="/dashboard/<?php echo $url; ?>/eliminar?id=<?php echo $publi->id ?>">
                        <i class="fa-solid fa-trash fa-xl" style="color: rgb(120, 0, 0);"></i>
                    </a>
                    -->
                </div>
            </div>
        <?php } ?>
</div>