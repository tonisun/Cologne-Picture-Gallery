<?php

namespace ColognePictureGallery\DB;

class SQLiteConfig {

    protected string $pathToSQLite =  __DIR__ .'/images.db';

    public function __toString(){
        return $this->pathToSQLite;
    }
}