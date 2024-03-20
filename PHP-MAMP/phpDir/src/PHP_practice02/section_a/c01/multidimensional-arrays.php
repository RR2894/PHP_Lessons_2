<?php

/* 
  Write a PHP code to store indexed arrays in an array or multidimentional array with variable called $offers. Each element in the array stores associated array holding name, price, and stock level of an item that is on offer. Print out the name and price of  all the products. 

  Write you php code here

   */

  $offers = [
    ["Strawberry candy", 4, 50],
    ["Lemon candy", 5, 80],
    ["Pinapple candy", 8, 100],
  ];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head><body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p><?php echo $offers[0][0] . ": Price: $" . $offers[0][1] . " In stock: " . $offers [0][2] ?></p>
  <p><?php echo $offers[1][0] . ": Price: $" . $offers[1][1] . " In stock: " . $offers [1][2] ?></p>
  <p><?php echo $offers[2][0] . ": Price: $" . $offers[2][1] . " In stock: " . $offers [2][2] ?></p>
</body>

</html>