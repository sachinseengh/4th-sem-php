
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        .form{
            
            margin-left: 40vw;
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="form">
    <form action="cprocess.php" method="post">
        <div>
        <?php if(isset($_GET['msg'])) {?>
    <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } ?>

        </div>
        <div>
        <label style="color: green;">Change Password</label>
        </div>
        
        <label>Old Password</label>
        <div>
            <input type="text" name="oldpassword" id="oldpassword">
            
        </div>
        <label >New Password</label>
        <div>
        <input type="password" name="newpassword" id="newpassword">
        </div>
        <div>
            <br>
            <input type="submit" value="submit">
        </div>
        
        </div>  
    </form>
</body>
</html>
