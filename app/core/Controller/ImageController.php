<?php
namespace ColognePictureGallery\Controller;

use PDO;
use ColognePictureGallery\Controller\Controller;
use ColognePictureGallery\Model\DB;
use ColognePictureGallery\Model\ImageModel;


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
            echo "Probleme mit der ".$db->getDNS()." Datenbankverbindung...";
            die();
        }
    }

    public function fetchAll(): array | null {
        $sql = 'SELECT id, filename, title, description FROM images ORDER BY id ASC';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, ImageModel::class);
        //var_dump($results);
        return $results;
    }
}