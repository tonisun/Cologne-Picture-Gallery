<?php
namespace ColognePictureGallery\DB;


class DBConfig {
    protected string $pathToConfigIni =  __DIR__ .'/../../utils/config.ini';

    public function __toString(){
        return $this->pathToConfigIni;
    }

}

// $db = new DBConfig();
// echo $db;
// var_dump($db);