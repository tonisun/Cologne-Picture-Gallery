<?php
require_once('View/inc/utils.php');
require_once('Model/DB.php');
require_once('Controller/ImageController.php');
// $dbe = DBE::MySQL;
// echo $dbe->value;
// $db = new DB($dbe);
// echo '<pre>';
// var_dump($db);
// echo '</pre>';
// $ic = new ImageController($db);
// $images =$ic->fetchAll();
// var_dump($images);


$ic = new ImageController(new DB(DBE::MySQL));
$images =$ic->fetchAll();

render('View/index.view.php', [
    'images' => $images
]);