<?php

require_once("user.php");

$username =$_POST['username'];
$password = $_POST['password'];


// if(empty($username) || empty($password)){
//     echo "password or username can't be empty";
//     die;
// }

// if($username == "admin" && $password == "123"){
//     echo "valid user";
// }else{
//     echo "invalid user";
// }




$user = new User($username,$password);
$user->verify_user();





?>