<aside class="sidebar">
    <a href="/" class="sidebar__contenedor-logo">
        <div class="sidebar__logo"></div>
    </a>

    <nav class="sidebar__nav">
        <?php imprimirEnlaceAdmin('/dashboard', 'Dashboard'); ?>
        <?php imprimirEnlaceAdmin('/dashboard/proyects', 'Proyects'); ?>
        <?php imprimirEnlaceAdmin('/dashboard/techs', 'Techs'); ?>
        <?php imprimirEnlaceAdmin('/dashboard/careers', 'Career'); ?>
    </nav>

    <div class="sidebar__nav">
        <?php imprimirEnlaceAdmin('/logout', 'Logout'); ?>
    </div>
</aside>