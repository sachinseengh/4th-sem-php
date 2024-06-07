<?php

session_start();
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
        $sql="Select * from detail where name ='$this->username' and password='$this->password'";
        

       $result=mysqli_query($this->con,$sql);
     
       if(mysqli_num_rows($result)>=1){
    
                $_SESSION['logged_user']=$this->username;       
                header('Location:home.php?msg="Hello sir"');

        }else{
            header('Location:login.php?msg="Invalid Credentials"');
          }
    }

    
    public function cpassword($oldpassword,$newpassword){

        $sql="update detail set password='$newpassword' where password='$oldpassword' and name='$_SESSION[logged_user]'";


        $res=mysqli_query($this->con,$sql);
        if($res){
            header("Location:../login.php?msg=Password changed successfully");
        }else{
            header("Location:../login.php?msg=password not matched");
        }

    

    }

    }


    



?>