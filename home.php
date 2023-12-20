<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>HOME</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="home">
    <h1>Welcome, <?php echo $_SESSION['user_name'];?></h1>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>
<?php
}
else{
    header("Location: index.php");
    exit();
}
?>