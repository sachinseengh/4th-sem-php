<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="signup.css">
</head>
<body>
<form action="signup_process.php" method="post">
<h2>Signup</h2>
<?php if(isset($_GET['error'])) {?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label> UserName:</label>
    <input type="text" name="uname" placeholder="UserName">
    <br><br>
    <label>Password:</label>
    <input type="password" name="password1" placeholder="Password">
    <br><br>
    <label>Password Confirmation:</label>
    <input type="password" name="password2" placeholder="Password">
    <br><br>
    <button type="submit">Signup</button>
</form>
</body>
</html>