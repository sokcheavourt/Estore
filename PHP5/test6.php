<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th style="width: 100px;">Name</th>
            <th style="width: 100px;">Gender</th>
            <th style="width: 100px;">Address</th>
        </tr>
        <?php
    //Associate Array
        $object = array(
            "name"=>"Phanna",
            "Gender"=>"Male",
            "Address"=>"Phnom penh"
        );
        $staff=array(
            array(
                "name"=>"phanna",
                "gender"=>"Male",
                "add"=>"PP"
            ),//0
            array(
                "name"=>"Sophea",
                "gender"=>"Male",
                "add"=>"KPS"
            ),//1
            array(
                "name"=>"Rachun",
                "gender"=>"Male",
                "add"=>"KP"
            ),//2
            array(
                "name"=>"Rachun",
                "gender"=>"Male",
                "add"=>"KP"
            ),
        );
       
    ?>
    </table>






</body>
</html>