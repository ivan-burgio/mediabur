<aside class="sidebar">
    <a href="/">
        <div class="sidebar__titulo">Mediabur</div>
    </a>

    <div class="sidebar__links">
        <a href="/dashboard" class="sidebar__links-link">Dashboard</a>
    </div>

    <div class="sidebar__links">
        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Noticias
        </p>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/noticias">Ver noticias</a></li>            
            <li><a class="dropdown-item" href="/dashboard/noticias/crear">Crear noticia</a></li>
        </ul>

        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Guias
        </p>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/guias">Ver guias</a></li>            
            <li><a class="dropdown-item" href="/dashboard/guias/crear">Crear guia</a></li>
        </ul>

        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articulos
        </p>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/articulos">Ver articulos</a></li>            
            <li><a class="dropdown-item" href="/dashboard/articulos/crear">Crear articulo</a></li>
        </ul>

        <p class="dropdown-toggle sidebar__links-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Analisis
        </p>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/dashboard/analisis">Ver analisis</a></li>            
            <li><a class="dropdown-item" href="/dashboard/analisis/crear">Crear analisis</a></li>
        </ul>
    </div>

    <div class="sidebar__links">
        <a href="/logout" class="sidebar__links-link">Logout</a>
    </div>

    <div class="sidebar__user">User: <span class="sidebar__user-name"><?php echo $user_name; ?></span></div>
</aside>