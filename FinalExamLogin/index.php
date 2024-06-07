<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Login Form</h1>
    
    <div>
        <h6 style="color:green;">
            <?php

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}


?>
        </h6>
    </div>
    <div>
        <h6 style="color:red;">
            <?php

if(isset($_GET['emsg'])){
    echo $_GET['emsg'];
}


?>
        </h6>
    </div>
    <form action="login_process.php" method="GET">


    Name:
    <input type="text" name="name" id="name">

    <br>
    <br>
    Password:
    <input type="password" name="password" id="password">
    <br>
    <br>

    <button type="submit">Submit</button>
    <br>
    <a href="register.php">Register Now</a>
    </form>
</body>
</html>