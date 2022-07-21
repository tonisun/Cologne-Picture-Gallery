<?php
namespace ColognePictureGallery\Model;

/**
 * DataBaseEngies
 * 
 * @tonisun
 */
enum DBE : string {
    case MySQL = 'mysql';
    case SQLite = 'sqlite';
    case PostgreSQL = 'pgsql';
    

    public function getDNS(): string { 
        $iniData = parse_ini_file('DB/config.ini', true);
        #$iniData = parse_ini_file('../DB/config.ini', true);
        //print_r($ini_data['MySQL']);
        //print_r($ini_data['PostgreSQL']);
        //print_r($ini_data['SQLite']);
        #echo $ini_data['MySQL']['dbname'];
        
        return match ($this){
            self::MySQL =>  "mysql:host=".$iniData['MySQL']['host'].
                            ";dbname=".$iniData['MySQL']['dbname'].
                            ";charset=utf8",
            
            self::SQLite => "sqlite:".$iniData['SQLite']['path'],

            self::PostgreSQL => "pgsql:host=".$iniData['PostgreSQL']['host'].
                                ";port=".$iniData['PostgreSQL']['port'].
                                ";dbname=".$iniData['PostgreSQL']['dbname'].";",
            default => '',
        };
    }

    public function getUser(): string { 
        $iniData = parse_ini_file('DB/config.ini', true);
        #$iniData = parse_ini_file('../DB/config.ini', true);
        //print_r($ini_data['MySQL']);
        //print_r($ini_data['PostgreSQL']);
        //print_r($ini_data['SQLite']);
        #echo $ini_data['MySQL']['dbname'];
        
        return match ($this){
            self::MySQL =>  $iniData['MySQL']['user'],
            
            self::SQLite => $iniData['SQLite']['user'],

            self::PostgreSQL => $iniData['PostgreSQL']['user'],
            default => '',
        };
    }

    public function getPass(): string { 
        $iniData = parse_ini_file('DB/config.ini', true);
        #$iniData = parse_ini_file('../DB/config.ini', true);
        //print_r($ini_data['MySQL']);
        //print_r($ini_data['PostgreSQL']);
        //print_r($ini_data['SQLite']);
        #echo $ini_data['MySQL']['dbname'];
        
        return match ($this){
            self::MySQL =>  $iniData['MySQL']['password'],
            
            self::SQLite => $iniData['SQLite']['password'],

            self::PostgreSQL => $iniData['PostgreSQL']['password'],
            default => '',
        };
    }
}
//- DNS alt
// $dbe = DBE::MySQL;
// echo '<pre>';
// echo $dbe->getDNS();
// echo $dbe->getUser();
// echo $dbe->getPass();
// echo '</pre>';

// echo '<pre>';
// print_r($dbe);
// echo '</pre>';

// echo '<pre>';
// echo $dbe->value;
// echo '</pre>';

// echo '<pre>';
// echo $dbe->name;
// echo '</pre>';