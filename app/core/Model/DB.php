<?php
namespace ColognePictureGallery\Model;

use ColognePictureGallery\Model\DBE;

/**
 * 
 * @tonisun
 */
class DB {

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
      } else if ($dbe->value === 'sqlite'){
        $this->dbe = $dbe;
        $this->dns = $this->dbe->getDNS();
      } else if ($dbe->value === 'pgsql') {
        $this->dbe = $dbe;
        $this->dns = $this->dbe->getDNS() ;
        $this->user = $this->dbe->getUser();
        $this->pass = $this->dbe->getPass();
      }
    }
}