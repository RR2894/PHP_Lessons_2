<?php
/*
Create a simple if else if statement to check if candy is in the stock or is coming soon or sold out. If candy is not in stock then print message “Sold Out”, if it is available in stock, print message “In Stock”Recap Practice / Classroom Coding

Write your code here */

$candyInStock = true;

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
  echo ($candyInStock != true) ? "In Stock" : "Sold Out";

  ?>
</body>

</html>