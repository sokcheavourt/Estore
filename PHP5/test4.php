<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "php myadmin" ?></title>
</head>
<body>
    <?php
    echo "helllo myname is php";

    $skill=10;
    if ($skill==10){
        echo "hi";
        $color = "green";
    }
    else{
        $color = "yellow";
    } 
    ?>

    <div style="width: 300px; height: 300px; background-color:<?php echo $color?>;" >

    </div>
    
</body>
</html>