<?php

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
        #$iniData = parse_ini_file('DB/config.ini', true);
        $iniData = parse_ini_file('../DB/config.ini', true);
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


}
//- DNS alt
$dbe = DBE::MySQL;
echo '<pre>';
echo DBE::MySQL->getDNS();
echo '</pre>';

echo '<pre>';
print_r($dbe);
echo '</pre>';

echo '<pre>';
echo $dbe->value;
echo '</pre>';

echo '<pre>';
echo $dbe->name;
echo '</pre>';