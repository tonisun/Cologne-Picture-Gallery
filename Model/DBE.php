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
        return match ($this){
            self::MySQL => 'mysql:host=127.0.0.1;dbname=hospital;charset=utf8',
            self::SQLite => 'sqlite:db/hospital.db',
            default => '',
        };
    }


}