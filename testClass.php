<?php

/**
 * Created by PhpStorm.
 * User: Local
 * Date: 13.09.2017
 * Time: 15:18
 */
class testUser{
 public $name= "";
 public $city= "";
 private $loggedIn = true;

    public function login(){
     $this->loggedIn=true;
    }
    public function logout(){
        $this->loggedIn=false;
    }
    public function islog(){
        return $this->loggedIn;
    }
}