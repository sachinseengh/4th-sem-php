<?php
session_start();
include "database.php";
if(isset($_POST['uname']) && isset($_POST['password'])){
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
}
if(empty($uname)){
    header ("Location: index.php?error=UserName is Required");
    exit();
} else if(empty($pass)){
    header("Location: index.php?error=Password is Required");
    exit();
}
$enc = md5($pass);
$sql= "SELECT * FROM users WHERE user_name='$uname' AND password='$enc'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['user_name'] = $row['user_name'];
     header('Location:home.php');
     echo "hello";
    }else{
        header("Location: index.php?error=Username and Password Does Not Match");
        exit();
    }