<?php

require_once __DIR__ .'/View/inc/utils.php';
require_once __DIR__ .'/Model/DB.php';
require_once __DIR__ .'/Controller/ImageController.php';



$ic = new ImageController(new DB(DBE::MySQL));
$images =$ic->fetchAll();




render(__DIR__.'/View/index.view.php', [
    'images' => $images
]);