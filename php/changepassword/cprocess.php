<?php



require_once("../user.php");

$opass =$_POST['oldpassword'];
$npass = $_POST['newpassword'];






$user = new User($opass,$npass);
$user->cpassword($opass,$npass);



?>