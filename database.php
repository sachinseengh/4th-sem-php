<?php
$host="localhost";
$unamee="root";
$passwordd="";
$db_name="users";
$conn=mysqli_connect($host,$unamee,$passwordd,$db_name);
if(!$conn){
    echo "Connection Failed";
}