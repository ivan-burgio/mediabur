<div class="formulario__main">
    <h1 class="text-center"><?php echo $titulo; ?></h1>
    <p class="text-center">Este formulario de inicio de sesion es solo para los administradores de la pagina.</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form
        class="formulario"
        method="POST"
        action="/login"
    >
        <input type="email" class="formulario__input" placeholder="Ingresa tu email" id="email" name="email">

        <div class="input-container">
            <input type="password" class="formulario__input" placeholder="Ingresa tu contraseña" id="password" name="password">
            <i id="eye-icon" class="fa fa-eye" onclick="mostrarOcultarContrasena()"></i>
        </div>

        <input type="submit" class="formulario__boton" name="submit" value="Login">
    </form>
</div>