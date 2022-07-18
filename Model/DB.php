<?php

include_once('DBE.php');

/**
 * 
 * @tonisun
 */
class DB {
    
    private $iniPath = '../DB/config.ini';
    private DBE $dbe;  
    private PDO $pdo;

    public function __constructor(DBE $dbe) {

        if ($dbe->value === 'mysql' ){
            $this->dbe = $dbe;
          try {
            $this->pdo = new PDO($this->dbe->getDNS(), getUser(), getPass(), [
              PDO::ATTR_EMULATE_PREPARES => false,
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
          } catch (PDOException $e) {
            echo 'Probleme mit der MySQL Datenbankverbindung...';
            die();
          }
          
        } else if ($dbe->value === 'sqlite'){
            $this->dbe = $dbe;
          try {
            $pdo = new PDO($this->dbe->getDNS(), '','', [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
          } catch(PDOException $e) {
            echo 'Probleme mit der SQLite Datenbankverbindung...';
            die();
          }
        }
      }


      /**
       * ToDo: extend for PostgreSQL 11 and 14
       */
      private function getUser(): string {
        $iniData = parse_ini_file($iniPath, true);
        if ($this->dbe->value === 'mysql')
            return $iniData['MySQL']['user'];
        else if ($this->dbe->value === 'sqlite')
            return $iniData['SQLite']['user'];
      }


      /**
       * ToDo: extend for PostgreSQL 11 and 14
       */
      private function getPass(): string {
        $iniData = parse_ini_file($iniPath, true);
        if ($this->dbe->value === 'mysql')
            return $iniData['MySQL']['password'];
        else if ($this->dbe->value === 'sqlite')
            return $iniData['SQLite']['password'];
      }


      
      public function query2($query, $params = array()) {
        $stmt = self::con(DBE::MySQL)->prepare($query);
        #$stmt = self::con(DBE::SQLite)->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
      }
}