<nav class="nav nav-pills">
    <?php imprimirEnlace('/','Novedades'); ?>
    <?php imprimirEnlace('/noticias','Noticias'); ?>
    <?php imprimirEnlace('/analisis','Analisis'); ?>
    <?php imprimirEnlace('/articulos','Articulos'); ?>
    <?php imprimirEnlace('/guias','Guias'); ?>

    <!-- <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categorias</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Link</a></li>
        </ul>
    </div> -->

    <form class="form-inline my-2 my-lg-0" method="POST">
        <input
            class="form-control"
            type="search"
            placeholder="Buscar dentro de <?php echo $url; ?>"
            name="busqueda"
        >
        <button class="btn-search" type="submit">
            <i class="fa-solid fa-magnifying-glass" style="color: #FFFFFF;"></i>
        </button>
    </form>
</nav>