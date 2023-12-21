<?php
require('db.php');


$username =$_POST['username'];
$password = $_POST['password'];


$sql="Select * from detail where name ='$username' and password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    header('Location:home.php?msg="Hello sir"');

}else{
    header('Location:login.php?msg="Invalid Credentials"');
}


?>