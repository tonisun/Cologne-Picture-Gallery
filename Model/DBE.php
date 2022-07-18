<?php

/**
 * 
 * @tonisun
 */
enum DBE : string {
    case MySQL = 'mysql';
    case SQLite = 'sqlite';
    case PostgreSQL = 'pgsql';
    

    public function getDNS(): string { 

        $ini_data = parse_ini_file('../DB/config.ini', true);
        print_r($ini_data['MySQL']);
        echo $ini_data['MySQL']['dbname'];
        
        return match ($this){
            self::MySQL =>  "mysql:host=".$ini_data['MySQL']['host'].
                            ";dbname=".$ini_data['MySQL']['dbname'].
                            ";charset=utf8",
            
            self::SQLite => "sqlite:".$ini_data['SQLite']['path'],

            self::PostgreSQL => "pgsql:host=".$ini_data['PostgreSQL']['host'].
                                ";port=".$ini_data['PostgreSQL']['port'].
                                ";dbname=".$ini_data['PostgreSQL']['dbname'].";",
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