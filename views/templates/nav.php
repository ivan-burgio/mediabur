<<<<<<< HEAD
<nav class="nav nav-pills">
<<<<<<< HEAD
    <?php imprimirEnlace('/','Novedades'); ?>
    <?php imprimirEnlace('/noticias','Noticias'); ?>
    <?php imprimirEnlace('/analisis','Analisis'); ?>
    <?php imprimirEnlace('/articulos','Articulos'); ?>
    <?php imprimirEnlace('/guias','Guias'); ?>
=======
<nav class="nav nav-pills col text-center" id="nav-small">
    <img class="header__img-barras" src="/build/img/barras.svg" alt="imagen barras" id="nav-desple" loading="lazy">
=======
    <?php imprimirEnlace('/', 'Novedades'); ?>
    <?php imprimirEnlace('/noticias', 'Noticias'); ?>
    <?php imprimirEnlace('/analisis', 'Analisis'); ?>
    <?php imprimirEnlace('/articulos', 'Articulos'); ?>
    <?php imprimirEnlace('/guias', 'Guias'); ?>
>>>>>>> 55c9968f584d441d88a2ab6be40ade82b7fc7be7

    <div id="navContenido" class="d-none">
        <?php imprimirEnlace('/', 'Novedades'); ?>
        <?php imprimirEnlace('/noticias', 'Noticias'); ?>
        <?php imprimirEnlace('/analisis', 'Analisis'); ?>
        <?php imprimirEnlace('/articulos', 'Articulos'); ?>
        <?php imprimirEnlace('/guias', 'Guias'); ?>

        <!-- <div class=" nav-item dropdown">
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

        <?php if ($url !== null) : ?>
            <form class="form-inline my-2 my-lg-0" method="POST">
                <input class="form-control" type="search" placeholder="Buscar en <?php echo $url; ?>" name="busqueda">
                <button class="btn-search" type="submit">
                    <i class="fa-solid fa-magnifying-glass" style="color: #FFFFFF;"></i>
                </button>
            </form>
        <?php endif; ?>
    </div>
</nav>

<nav class="nav nav-pills" id="nav-large" style="height: 6rem;">
    <?php imprimirEnlace('/', 'Novedades'); ?>
    <?php imprimirEnlace('/noticias', 'Noticias'); ?>
    <?php imprimirEnlace('/analisis', 'Analisis'); ?>
    <?php imprimirEnlace('/articulos', 'Articulos'); ?>
    <?php imprimirEnlace('/guias', 'Guias'); ?>
>>>>>>> ae7b193 (Mejoras visuales y Responsive)

    <!-- <div class=" nav-item dropdown">
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

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 55c9968f584d441d88a2ab6be40ade82b7fc7be7
    <?php if ($url !== null) : ?>
        <form class="form-inline my-2 my-lg-0" method="POST">
            <input class="form-control" type="search" placeholder="Buscar en <?php echo $url; ?>" name="busqueda">
            <button class="btn-search" type="submit">
                <i class="fa-solid fa-magnifying-glass" style="color: #FFFFFF;"></i>
            </button>
        </form>
    <?php endif; ?>
<<<<<<< HEAD
>>>>>>> ae7b193 (Mejoras visuales y Responsive)
=======

>>>>>>> 55c9968f584d441d88a2ab6be40ade82b7fc7be7
</nav>