<?php

require 'db.php';


 class User{
    private $username;
    private $password;

    public function __construct($u,$p){
        $this->username=$u;
        $this->password=$p;

    }
    public function insert_user(){
        global $conn;
        $sql = "insert into detail(name,password)values ('$this->username','$this->password')";

        if(mysqli_query($conn,$sql)){
            header("Location:index.php?msg=Signup Successfully");

        }else{
            header("Location:index.php?msg=Signup unsuccessfully");
        }

        
    }
}


?>