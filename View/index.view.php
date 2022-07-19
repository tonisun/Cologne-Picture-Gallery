<?php
    include_once('View/inc/header.php');
?>

<?php ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="View/assets/images/favicon_red.ico" type="image/x-icon">
    <link rel="stylesheet" href="View/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/assets/css/styles.css">
    <link rel="stylesheet" href="View/assets/css/custom.css">
    <link rel="stylesheet" href="View/assets/css/simple.css">
    <title>MVC</title>
</head>

<body>
    <h1>Welcomme MVC</h1>

    <div class="section">
        <div class="container">
            <h4>Meine Bilder</h4>
        </div>
    </div>
    <?php
// echo '<pre>';
// var_dump($images[0]);

// print_r($images[0]->getId());
// echo '</pre>';
?>

    <?php if(!empty($images)): ?>
    <div class="section">
        <div class="container">
            <div class="image-gallery">
                <?php foreach($images AS $image): ?>
                <figure class="image-gallery-item">
                    <img class="image-gallery-image" src="View/assets/images/<?php echo $image->getFileName(); ?>"
                        alt="Kerl1">
                    <figcaption><b><?php echo $image->getId(); ?>. <?php echo esc($image->getTitle()); ?></b>
                        <?php echo esc($image->getDescription()); ?>
                    </figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php else: ?>
    <p>Es wurden noch keine Bilder erfasst.</p>
    <?php endif; ?>

    <?php
    include_once('View/inc/footer.php');
?>