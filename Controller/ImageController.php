<?php

require_once('Controller.php');
require_once('Model/DB.php');
require_once('Model/ImageModel.php');


/**
 * 
 * @tonisun
 */
class ImageController implements Controller {

    private PDO $pdo;

    public function __construct(private DB $db) {
        try {
            $this->pdo = new PDO($db->getDNS(),$db->getUser(),$db->getPass(), [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
          } catch (PDOException $e) {
            echo 'Probleme mit der MySQL Datenbankverbindung...';
            die();
          }
    }

    public function fetchAll(): array | null {
        $sql = 'SELECT id, filename, title, description FROM images ORDER BY id ASC';
        $stmt = $this->pdo->prepare($sql);
        #$stmt = $this->pdo->execute($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, ImageModel::class);
        //var_dump($results);
        return $results;
    }
}