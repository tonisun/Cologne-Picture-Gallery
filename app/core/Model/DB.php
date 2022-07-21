<?php
namespace ColognePictureGallery\Model;

use ColognePictureGallery\Model\DBE;

/**
 * 
 * @tonisun
 */
class DB {
    
    private $iniPath = '../DB/config.ini';
    private DBE $dbe;  
    public $dns;
    public $user;
    public $pass;


    public function getDNS(){
      return $this->dns;
    }

    public function getUser(){
      return $this->user;
    }
    public function getPass(){
      return $this->pass;
    }

    public function __construct(DBE $dbe) {
        if ($dbe->value === 'mysql' ){
            $this->dbe = $dbe;
            $this->dns = $this->dbe->getDNS();
            $this->user = $this->dbe->getUser();
            $this->pass = $this->dbe->getPass();
          // try {
          //   $this->pdo = new PDO($this->dbe->getDNS(), $this->dbe->getUser(), $this->dbe->getPass(), [
          //       PDO::ATTR_EMULATE_PREPARES => false,
          //       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          //   ]);
          //   echo $this->pdo;
          // } catch (PDOException $e) {
          //   echo 'Probleme mit der MySQL Datenbankverbindung...';
          //   die();
          // }
          
        } else if ($dbe->value === 'sqlite'){
            $this->dbe = $dbe;
            $this->dns = $this->dbe->getDNS();
            $this->user = $this->dbe->getUser();
            $this->pass = $this->dbe->getPass();
            // try {
            //   $pdo = new PDO($this->dbe->getDNS(), '','', [
            //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            //   ]);
            // } catch(PDOException $e) {
            //   echo 'Probleme mit der SQLite Datenbankverbindung...';
            //   die();
            // }
        }
      }

      

      
      // public function query2($query, $params = array()) {
      //   $stmt = self::con(DBE::MySQL)->prepare($query);
      //   #$stmt = self::con(DBE::SQLite)->prepare($query);
      //   $stmt->execute($params);
      //   $data = $stmt->fetchAll();
      //   return $data;
      // }
 
}