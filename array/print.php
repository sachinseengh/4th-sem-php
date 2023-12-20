<?php

$arr = array("Name"=>"Sachin","Address"=>"Bharatpur");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" height="30" width="38">
        <tr>Name</tr>
        <tr>Address</tr>
        <?php
        foreach($arr as $x=>$y){?>
            <td><?php echo $y; ?></td> 
       <?php }?>
        
    </table>
</body>
</html>