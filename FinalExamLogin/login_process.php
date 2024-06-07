<?php

include 'connection.php';

if(isset($_GET['name']) && isset($_GET['password'])){
    $name= $_GET['name'];
    $password = $_GET['password'];
}




//Fetch the detail form detail table if found 

$sql="select * from detail where name='$name' and password='$password'";

//$conn is place where we put value $sql and we store value into $res
$res = mysqli_query($conn,$sql);

// in mysqli_num_rows if more more than or equal to 1 row present into database then it providelocation to go on dashboard 
if(mysqli_num_rows($res)>=1){
    header("Location:dashboard.php");
}else{
    header("Location:index.php?emsg=invalid username or password");
}

?>