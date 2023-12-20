<?php

 class User{
    private $username;
    private $password;

    public function __construct($u,$p){
        $this->username=$u;
        $this->password=$p;

    }
    public function verify_user(){
        if($this->username == "admin" && $this->password == "123"){
            return true;
        }
        else{
            return false;
        }
    }
}


?>