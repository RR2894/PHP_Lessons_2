<?php
/*
Create a simple if else statement to check if candy is in stock or not. If candy is not in stock, then print the message “Sold Out”; if it is available in stock, print the message “In Stock.”Recap Practice / Classroom Coding

Write your code here
*/
$candyInStock = 50;

?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>

  <?
  /* Write your code here */

  if ($candyInStock >= 51):
    echo "There's enough candy";
    elseif($candyInStock <= 50):
      echo "Sold out";
      endif; 
      ?>
      </body>

</html>