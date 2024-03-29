<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre las últimas noticias, reseñas y análisis sobre videojuegos, tecnología, consolas, programación y entretenimiento. Mantente al día con las tendencias y novedades del mundo digital en nuestro blog. ¡Explora artículos informativos, tutoriales y análisis de expertos para entusiastas y profesionales de la tecnología y los videojuegos!">
    <title>Mediabur | <?php echo $titulo ?> </title>
    <link rel="icon" type="image/png" href="/build/img/logo2.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" /> <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Botstrap -->
    <link rel="stylesheet" href="/build/css/app.css"> <!-- CSS -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9906029278180799"
     crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once __DIR__ . '/templates/header.php'; ?>
    <?php include_once __DIR__ . '/templates/nav.php'; ?>
    <main class="contenido">
        <?php include_once __DIR__ . '/templates/categorias.php'; ?>
        <?php echo $contenido; ?>
    </main>
    <?php include_once __DIR__ . '/templates/footer.php';?>

    <script src="/build/js/main.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!-- Botstrap -->
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> <!-- JQuery -->
</body>

</html>
