<?php

require_once('Controller.php');
require_once('../Model/DB.php');

/**
 * 
 * @tonisun
 */
class ImageController implements Controller {


    public function __construct(private DB $pdo) {}

    public function fetchAll(): array | null {
        $sql = 'SELECT id, filename, title, description FROM images ORDER BY id ASC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, ImageModel::class);
        # var_dump($results);
        return $results;
    }
}


$ic = new ImageController(new DB(DBE::MySQL));