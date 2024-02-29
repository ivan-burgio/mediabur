<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iván Burgio | <?php echo $titulo_pestaña ?> </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"/> <!-- Swiper -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"/> <!-- Font Awesome -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- Botstrap -->
        <link rel="stylesheet" href="/build/css/app.css"> <!-- CSS -->
</head>
<body class="dashboard">
    <?php include_once __DIR__ .'/admin-templates/sidebar.php'; ?>
    <main class="dashboard__main">
        <?php include_once __DIR__ .'/admin-templates/header.php'; ?>
        <?php echo $contenido; ?> 
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/build/js/main.min.js" defer></script>
</body>
</html>