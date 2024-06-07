<?php

include 'connection.php';

if(isset($_GET['name']) && isset($_GET['password'])){
    $name= $_GET['name'];
    $password = $_GET['password'];
}


// if(empty($name)){
//     header("Location:index.php?error=empty username");
// }


$sql = "insert into detail(name,password) values ('$name','$password')";

if(mysqli_query($conn,$sql)){
   header("Location:index.php?msg=successfully registered");
}else{
    header("Location:index.php?msg=failed registered");
}

?>