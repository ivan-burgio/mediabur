<div class="dashboard__contenido">
    <div class="formulario__main">
        <p class="text-center pt-5">Rellena los campos para crear correctamente la publicacion.</p>

        <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

        <form class="formulario" method="POST" action="/dashboard/'<?php echo strtolower($titulo_page); ?>'/crear">
            <input type="text" class="formulario__input" placeholder="Ingresa un titulo" required>

            <select class="formulario__input" required>
                <option value="" selected disabled>Selecciona el tipo de publicacion</option>
                <option value="categoria2" <?php echo ($tipo == "noticia") ? "selected" : ""; ?>>Noticia</option>
                <option value="categoria1" <?php echo ($tipo == "guia") ? "selected" : ""; ?>>Guia</option>
                <option value="categoria3" <?php echo ($tipo == "articulo") ? "selected" : ""; ?>>Articulo</option>
                <option value="categoria3" <?php echo ($tipo == "analisis") ? "selected" : ""; ?>>Analisis</option>
            </select>

            <select class="formulario__input" required>
                <option value="" selected disabled>Selecciona una categoría</option>
                <option value="categoria2">Videojuegos</option>
                <option value="categoria1">Plataformas</option>
                <option value="categoria3">Tecnologia</option>
                <option value="categoria3">Programacion</option>
                <option value="categoria3">Entretenimiento</option>
            </select>

            <div class="formulario__input d-flex flex-column align-items-center">
                <label for="activo">¿Va a estar activo?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="activo" id="activo" value="1" required>
                    <label class="form-check-label" for="activo">Sí</label>
                </div>
            </div>

            <textarea
                class="formulario__input textarea"
                rows="50"
                cols="50"
                placeholder="Escribe la publicación como si fuera HTML. Agrega etiquetas <h3>, <p>, <a> y <img> para crear el contenido de la publicación. Para las imagenes procurar que no tengan copyright, derechos de autor o aguna de esas cosas.
                "
                required
            ></textarea>

            <input type="submit" class="formulario__boton" name="submit" value="Crear <?php echo $tipo; ?>">
        </form>
    </div>
</div>