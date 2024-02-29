<div class="formulario__main">
    <h1><?php echo $titulo_pagina; ?></h1>
    <p>Este formulario de inicio de sesion es solo para los administradores de la pagina.</p>

    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form
        class="formulario"
        method="POST"
        action="/login"
    >
        <label for="email" class="formulario__label">Email</label>
        <input type="email" class="formulario__input" placeholder="Email" id="email" name="email">

        <label for="password" class="formulario__label">Password</label>
        <input type="password" class="formulario__input" placeholder="Password" id="password" name="password">

        <input type="submit" class="formulario__boton" name="submit" value="Login">
    </form>
</div>