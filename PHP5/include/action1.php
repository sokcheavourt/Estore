<?php 

//$txtUser =$_POST['txtUser'];
//echo md5($txtUser);
//echo $txtUser;


$user = "chea";
$pass = "123";

session_start();

$txtUser =$_POST['txtUser'];
$txtPass =$_POST['txtPass'];



if($user == $txtUser ){

    if ($pass == $txtPass){

            header("Location:index1.php");

            // function header() user for return page
}
else {
    ?>
    <h1>you know me</h1>
    <?php
}

}else {
    
    $_SESSION["msg"]= "You are not allowed to";
    header("Location:index1.php");
}


?>