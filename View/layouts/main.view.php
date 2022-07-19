<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="View/assets/images/favicon_red.ico" type="image/x-icon">
    <link rel="stylesheet" href="View/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/assets/css/styles.css">
    <link rel="stylesheet" href="View/assets/css/simple.css">
    <link rel="stylesheet" href="View/assets/css/custom.css">
    <title>MVC</title>
</head>

<body>
    <header>
        <h1>Hallo MVC with PHP-8.1</h1>
        <h4>My Cologne</h4>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <p>&copy <?= date("Y"); ?> ToniSun</p>
    </footer>
</body>

</html>