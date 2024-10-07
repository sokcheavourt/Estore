<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="menu">
    <ul>
        <?php 
        $color = array('red','green','yellow','yellow');
        for ($i = 0; $i < count($color); $i++){
            ?>
            <li>
                <a href=""></a><?php echo $color[$i]?></a>
            </li>
            <?php 
        }
        ?>
    </ul>

 </div>

 <div>
    
    <br>

    <div>
    <?php
    $object = array("name" =>"document", "description" =>"presentation", "application" =>"web");
    echo $object["name"].":". $object["description"] ." " . $object["application"];
    
    ?>

    </div>
    <br>

 </div>
   

<div>
    <table border="1">

    <?php

$staff = array(
    array("name" =>"staff", "description" =>"staff"),
    array("name"=>"chea", "description"=>"sok"),
    array("name"=> "sao", "description"=>"pov"),
    

);
for($i=0 ;$i<count($staff) ;$i++){
    ?>
        <tr>
            <td><?php echo $staff[$i]["name"]?></td>
            <td><?php echo $staff[$i]["description"]?></td>
            
        </tr>
    <?php
}

?>
    </table>
</div>


</body>
</html>