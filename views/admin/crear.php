<div class="dashboard__contenido">
    <div class="formulario__main">
        <p class="text-center pt-5">Rellena los campos para crear correctamente la publicacion.</p>

        <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

        <form class="formulario" method="POST" action="/dashboard/'<?php echo strtolower($titulo_page); ?>'/crear">
            <input name="titulo" type="text" class="formulario__input" placeholder="Ingresa un titulo" required>

            <select name="tipo" class="formulario__input" required>
                <option value="" selected disabled>Selecciona el tipo de publicacion</option>
                <option value="categoria2" <?php echo ($tipo == "noticia") ? "selected" : "disabled"; ?>>Noticia</option>
                <option value="categoria1" <?php echo ($tipo == "guia") ? "selected" : "disabled"; ?>>Guia</option>
                <option value="categoria3" <?php echo ($tipo == "articulo") ? "selected" : "disabled"; ?>>Articulo</option>
                <option value="categoria3" <?php echo ($tipo == "analisis") ? "selected" : "disabled"; ?>>Analisis</option>
            </select>

            <select name="categoria" class="formulario__input" required>
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
                    <input name="activo" class="form-check-input" type="checkbox" name="activo" id="activo" value="0">
                    <label class="form-check-label" for="activo">Sí</label>
                </div>
            </div>

            <textarea
                name="texto"
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