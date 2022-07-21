<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="app/core/View/assets/images/favicon_red.ico" type="image/x-icon">
    <link rel="stylesheet" href="app/core/View/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="app/core/View/assets/css/styles.css">
    <link rel="stylesheet" href="app/core/View/assets/css/simple.css">
    <link rel="stylesheet" href="app/core/View/assets/css/custom.css">
    <title>Cologne Picture Gallery</title>
</head>

<body>
    <header>
        <h1>Cologne Picture Gallery</h1>
        <p>&copy; <?= date("Y-m-d"); ?> by ToniSun</p>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <p>&copy <?= date("Y"); ?>by ToniSun</p>
    </footer>
    <script src="app/core/View/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>