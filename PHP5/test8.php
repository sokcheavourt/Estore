<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="menu">
  <ul> <!-- Add this ul tag -->
    <?php
    $course = array(
      array("menu" => "HTML", "link" => "https://www.w3schools.com/html/default.asp"),
      array("menu" => "CSS", "link" => "https://www.w3schools.com/css/default.asp"),
      array("menu" => "JavaScript", "link" => "https://www.w3schools.com/js/default.asp"),
      array("menu" => "Java", "link" => "https://www.w3schools.com/java/default.asp"),
    );
    for ($i = 0; $i < count($course); $i++) {
      ?>
      <li>
        <a href="<?php echo $course[$i]['link']; ?>"><?php echo $course[$i]['menu']; ?></a> <!-- Output menu item and link -->
      </li>
    <?php } ?>
  </ul> <!-- Add this ul tag -->
</div>

    
</body>
</html>