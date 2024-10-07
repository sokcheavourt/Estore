<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

   <?php 
    session_start();
    if (isset($_SESSION["msg"])!=null) {
        echo $_SESSION["msg"];
       // session_destroy();

    }
   
   ?>

   <form action="action1.php" method="post">

   <input type="text" name="txtUser">
   <input type="text" name="txtPass">
   <input type="submit" value="longin">
   </form>
    
</body>
</html>