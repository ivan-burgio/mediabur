<aside class="sidebar">
    <a href="/">
        <div class="sidebar__titulo">Mediabur</div>
    </a>

    <div class="sidebar__links">
        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Noticias
        </p>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/noticias">Ver todas las noticias</a></li>
            <li><a class="dropdown-item" href="#">Buscar noticia</a></li>
            <li><a class="dropdown-item" href="/dashboard/noticias/crear">Crear noticia</a></li>
            <li><a class="dropdown-item" href="/dashboard/noticias/editar">Editar noticia</a></li>
            <li><a class="dropdown-item" href="/dashboard/noticias/eliminar">Eliminar noticia</a></li>
        </ul>

        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Guias
        </p>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/guias">Ver todas las guias</a></li>
            <li><a class="dropdown-item" href="#">Buscar guia</a></li>
            <li><a class="dropdown-item" href="/dashboard/guias/crear">Crear guia</a></li>
            <li><a class="dropdown-item" href="/dashboard/guias/editar">Editar guia</a></li>
            <li><a class="dropdown-item" href="/dashboard/guias/eliminar">Eliminar guia</a></li>
        </ul>

        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articulos
        </p>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/articulos">Ver todos los articulos</a></li>
            <li><a class="dropdown-item" href="#">Buscar articulo</a></li>
            <li><a class="dropdown-item" href="/dashboard/articulos/crear">Crear articulo</a></li>
            <li><a class="dropdown-item" href="/dashboard/articulos/editar">Editar articulo</a></li>
            <li><a class="dropdown-item" href="/dashboard/articulos/eliminar">Eliminar articulo</a></li>
        </ul>

        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Analisis
        </p>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/analisis">Ver todos los analisis</a></li>
            <li><a class="dropdown-item" href="#">Buscar analisis</a></li>
            <li><a class="dropdown-item" href="/dashboard/analisis/crear">Crear analisis</a></li>
            <li><a class="dropdown-item" href="/dashboard/analisis/editar">Editar analisis</a></li>
            <li><a class="dropdown-item" href="/dashboard/analisis/eliminar">Eliminar analisis</a></li>
        </ul>
    </div>

    <div class="sidebar__links">
        <a href="/logout" class="sidebar__links-link">Logout</a>
    </div>

    <div class="sidebar__user">User: <span class="sidebar__user-name"><?php echo $user_name; ?></span></div>
</aside>