<?php
require_once('View/inc/utils.php');
require_once('Model/DB.php');
require_once('Controller/ImageController.php');



$ic = new ImageController(new DB(DBE::MySQL));
$images =$ic->fetchAll();




render('View/index.view.php', [
    'images' => $images
]);