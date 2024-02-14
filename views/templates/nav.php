<nav class="nav">
    <!-- small -->
    <div class="nav-container" id="nav-small">
        <div class="nav__contenedor-links">
            <div id="toggleNav" class="nav__toggle-image"></div>

            <div id="navLinks" class="nav__links">
                <a href="/" class="nav__contenedor-logo">
                    <div class="nav__logo"></div>
                    <?php nameActivo('/'); ?>
                </a>

                <?php imprimirEnlace('/aboutme', 'About me'); ?>
                <?php imprimirEnlace('/projects', 'Projects'); ?>
                <?php imprimirEnlace('/contact', 'Contact'); ?>
                <?php imprimirEnlace('/dashboard', 'Admin'); ?>
            </div>
        </div>
    </div>

    <!-- large -->
    <div class="nav-container" id="nav-large">
        <a href="/" class="nav__contenedor-logo">
            <div class="nav__logo"></div>
            <?php nameActivo('/'); ?>
        </a>

        <div class="nav__contenedor-links">
            <div id="navLinks" class="nav__links">
                <?php imprimirEnlace('/aboutme', 'About me'); ?>
                <?php imprimirEnlace('/projects', 'Projects'); ?>
                <?php imprimirEnlace('/contact', 'Contact'); ?>
                <?php imprimirEnlace('/dashboard', 'Admin') ?>
            </div>
        </div>
    </div>
</nav>