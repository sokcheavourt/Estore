<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "PHP first day" ?></title>
</head>
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

<body>

    <div class="menu">
        <ul>
            <?php
            //Index Array
            $course = array(
                array(
                    "menu"=>"HTML",
                    'link'=>"https://www.w3schools.com/html/",
                    'submenu'=> array(
                        array(
                            "_sub"=>"HTML1",
                            "_link"=>"https://www.w3schools.com/html/default.asp"
                        ),
                        array(
                            "_sub"=>"HTML2",
                            "_link"=>"https://www.w3schools.com/css/default.asp"
                        ),
                        array(
                            "_sub"=>"HTML3",
                            "_link"=>"https://www.w3schools.com/java/default.asp"
                        )
                    )
                ),
                array(
                    "menu"=>"CSS",
                    'link'=>"https://www.w3schools.com/css/default.asp",
                    'submenu'=> array(
                        array(
                            "_sub"=>"HTML1",
                            "_link"=>"https://www.w3schools.com/html/default.asp"
                        ),
                        array(
                            "_sub"=>"HTML2",
                            "_link"=>"https://www.w3schools.com/css/default.asp"
                        ),
                        array(
                            "_sub"=>"HTML3",
                            "_link"=>"https://www.w3schools.com/java/default.asp"
                        )
                    )
                ),
                array(
                    "menu"=>"Java",
                    'link'=>"https://www.w3schools.com/js/default.asp",
                    'submenu'=> array(
                        array(
                            "_sub"=>"HTML1",
                            "_link"=>"https://www.w3schools.com/html/default.asp"
                        ),
                        array(
                            "_sub"=>"HTML2",
                            "_link"=>"https://www.w3schools.com/css/default.asp"
                        ),
                        array(
                            "_sub"=>"HTML3",
                            "_link"=>"https://www.w3schools.com/java/default.asp"
                        )
                    )
                ),
                
            );


            for ($i = 0; $i < count($course); $i++) {
            ?>
                <li>
                    <a href="<?php echo $course[$i]['link']?>" target="_blank"><?php echo $course[$i]['menu']?></a>
                    <!-- submenu -->
                    <div class="submenu">
                        <ul>
                            <?php
                                $sub=$course[$i]['submenu'];//
                                for($j=0;$j<count($sub) ;$j++){
                                   ?>
                                        <li>
                                            <a href="<?php echo $sub[$j]['_link']?>"><?php echo $sub[$j]['_sub']?></a>
                                        </li>
                                   <?php
                                }
                            ?>
                        </ul>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    

    

    


</body>
</html>