<?php
require_once __DIR__ . '/View/inc/utils.php';

require_once __DIR__ . '/Controller/ImageController.php';

$images = new ImageController(new DB(DBE::MySQL));

render(__DIR__ . '/View/index.view.php', [
    'images' => $images
]);