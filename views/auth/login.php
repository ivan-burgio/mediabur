<main class="main contact">
    <?php require_once __DIR__ . '/../templates/alertas.php'; ?>

    <form
        data-aos="fade-up"
        class="contact__form"
        method="POST"
        action="/login"
    >
        <label for="email" class="contact__label">Email</label>
        <input type="email" class="contact__form-input" placeholder="Email" id="email" name="email">

        <label for="password" class="contact__label">Password</label>
        <input type="password" class="contact__form-input" placeholder="Password" id="password" name="password">

        <input type="submit" class="btnGeneral" name="submit" value="Login">
    </form>
</main>