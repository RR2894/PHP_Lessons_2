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
  <p><?php foreach ($offers as $offer) {
    echo "Product: " . $offer[0] . ", Quantity: " . $offer[1] . ", Price: $" . $offer[2] . "<br>" . "<br>";
    }?>
</body>

</html>

