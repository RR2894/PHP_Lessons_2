<?php

/* 
  Write you php code here

   */
$nutrition = ["fat" => 50];
$nutrition["fat"] = 20;
  

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Nutrition per 100g contains <?php echo $nutrition[0] ?></p>

</body>

</html>