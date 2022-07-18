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
        #$this->pdo = $this->db->getPDO();
        echo '<pre>';
        var_dump($db->getDNS());
        echo '</pre>';


        
        $this->pdo = new PDO($db->getDNS(),$db->getUser(),$db->getPass());

        // try {
        //     $this->pdo = new PDO($this->dbe->getDNS(), $this->dbe->getUser(), $this->dbe->getPass(), [
        //         PDO::ATTR_EMULATE_PREPARES => false,
        //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        //     ]);
        //     echo $this->pdo;
        //   } catch (PDOException $e) {
        //     echo 'Probleme mit der MySQL Datenbankverbindung...';
        //     die();
        //   }
    }

    public function fetchAll(): array | null {
        $sql = 'SELECT id, filename, title, description FROM images ORDER BY id ASC';
        $stmt = $this->pdo->prepare($sql);
        #$stmt = $this->pdo->execute($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, ImageModel::class);
        var_dump($results);
        return $results;
    }
}


//$ic = new ImageController(new DB(DBE::MySQL));
// $images =$ic->fetchAll();
// var_dump($images);