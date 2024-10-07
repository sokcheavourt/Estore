<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .box {
        width: 100px;
        height: 100px;
        background-color: green;
        margin: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        color: white;
        float: left;
    }

    .menu {
        width: 80%;
        overflow: hidden;
        margin: auto;
        background-color: red;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .menu ul li {
        float: left;
    }

    .menu ul li a {
        display: block;
        padding: 20px 30px;
        color: white;
        text-decoration: none;
        text-transform: uppercase;
    }
    .submenu{
        width: 120px;
        position: absolute;
        background-color: green;
        /* display: none; */
        opacity: 0;
        transform: translateY(20px);
        transition: 0.5s;
    }
    .menu ul li:hover .submenu{
        /* display: block; */
        opacity: 1;
        transform: translateY(0px);
    }
</style>
</head>
<body>

<div class="menu">
<?php 
$course = array(
    array("menu" => "HTML", "link" => "https://www.w3schools.com/html/default.asp"),
    array("menu" => "css","link" => "https://www.w3schools.com/css/default.asp"),
    array("menu" => "javascript","link"=>"https://www.w3schools.com/js/default.asp"),
    array("menu" => "java","link"=>"https://www.w3schools.com/java/default.asp"),
);
for ($i = 0; $i < count($course); $i++){
    ?>
    <li>
        <a href="<?php echo $course[$i]["link"] ?>" target="_blank"> <?php echo $course[$i]["menu"] ?></a>
        <div class="submenu">
            <ul>
                <li>
                    <a href="">html1</a>
                </li>
                <li>
                    <a href="">html1</a>
                </li>
                <li>
                    <a href="">html1</a>
                </li>
            </ul>
        </div>
    </li>
    <?php 
}


?>
</div>

</body>
</html>