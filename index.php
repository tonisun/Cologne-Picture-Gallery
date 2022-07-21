<?php
use ColognePictureGallery\Model\DBE;
use ColognePictureGallery\Model\DB;
use ColognePictureGallery\Controller\ImageController;
use ColognePictureGallery\View;
require_once __DIR__ .'/app/utils/utils.php';
require_once __DIR__ . '/app/utils/autoload.php';


#require_once __DIR__ .'/Model/DB.php';
#require_once __DIR__ .'/Controller/ImageController.php';



$ic = new ImageController(new DB(DBE::MySQL));
$images = $ic->fetchAll();




render(__DIR__.'/app/core/View/Image.view.php', [
    'images' => $images
]);