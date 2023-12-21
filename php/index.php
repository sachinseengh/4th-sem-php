
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .form{
            
            margin-left: 40vw;
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
    <form action="signup.php" method="post">
        <div>
          
   


        <?php if(isset($_GET['msg'])) {?>
    <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } ?>

        </div>
        <div>
        <label style="color: green;">Register Account</label>
        </div>
        
        <label>Username</label>
        <div>
            <input type="text" name="username" id="username">
            
        </div>
        <label >Password</label>
        <div>
        <input type="password" name="password" id="password">
        </div>
        <div>
            <br>
            <input type="submit" value="submit">
        </div>
        <div>Already have a account
            <a href="login.php">Log in</a>
        </div>
        </div>  
    </form>
</body>
</html>
