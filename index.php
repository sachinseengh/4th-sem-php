<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="index.css">
</head>
<body>
<form action="login.php" method="post">
<h2>LOGIN</h2>
<?php if(isset($_GET['error'])) {?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if(isset($_GET['msg'])) {?>
    <p class="msg"><?php echo $_GET['msg']; ?></p>
    <?php } ?>
    <label> UserName:</label>
    <input type="text" name="uname" placeholder="UserName">
    <br><br>
    <label>Password:</label>
    <input type="password" name="password" placeholder="Password">
    <br><br>
    <button type="submit">Login</button>
    <br>
    <br>
    <br>
    Don't have an account? Click here to <a href="signup.php">Signup</a>
    
</form>
</body>
</html>