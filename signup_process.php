<?php
session_start();
include "database.php";
if(isset($_POST['uname']) && isset($_POST['password1']) && isset($_POST['password2'])){
    $uname=$_POST['uname'];
    $pass1=$_POST['password1'];
    $pass2 = $_POST['password2'];
}
if(empty($uname)){
    header ("Location: signup.php?error=UserName is Required");
    exit();
}
else if(empty($pass1)){
    header("Location: signup.php?error=Password is Required");
    exit();
}else if(empty($pass2)){
    header("Location: signup.php?error=Password Confirmation is Required");
    exit(); 
}else if(strlen($pass1)<8){
    header("Location:signup.php?error=Password must be at least 8 character");
    exit();
}else if($pass1!=$pass2){
    header("Location: signup.php?error=Password and Password Confirmation Does Not Match");
    exit();   
}
$encpassword = md5($pass1);
$sql= "INSERT INTO users(user_name,password)values('$uname','$encpassword')";
if(mysqli_query($conn,$sql)){
    header("Location:index.php?msg=Signup Successfully");
}
