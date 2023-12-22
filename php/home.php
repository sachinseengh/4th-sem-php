<?php
session_start();






if(empty(($_SESSION['logged_user']))){
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>


<?php  if(isset($_GET['msg'])){ ?>

<h1><?php echo $_GET['msg']; ?></h1>


<?php } ?>    

<div>
    <a href="./changepassword/cpassword.php">Change password</a>
</div>

<a href="logout.php">Logout</a>
</body>
</html>



