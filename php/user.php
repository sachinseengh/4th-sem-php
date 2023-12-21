<?php

require 'Database1.php';


 class User{
    private $username;
    private $password;
    private $con;  

    public function __construct($u,$p){
        $this->username=$u;
        $this->password=$p;
        $db= new Database1();
        $this->con=$db->connect();

    }
    public function insert_user(){
       
        $sql = "insert into detail(name,password)values ('$this->username','$this->password')";

        if(mysqli_query($this->con,$sql)){
            header("Location:index.php?msg=Signup Successfully");

        }else{
            header("Location:index.php?msg=Signup unsuccessfully");
        }

  
        
    }
    public function verify_user(){
        $sql="Select * from detail where name ='$username' and password='$password'";

       $result=mysqli_query($this->con,$sql);

       if(mysqli_num_rows($result)>1){
    
                header('Location:home.php?msg="Hello sir"');

    }else{
            header('Location:login.php?msg="Invalid Credentials"');
}


    }

    
}


?>