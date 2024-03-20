<?php

/* 

  Write a PHP code to calculate the cost of an order. Let us say there are three candy items, and the cost of per pack is $5. Calculate the subtotal with tax of 20% and total amount

  Write you php code here

   */

   $candie1 = 5;
   $candie2 = 5;
   $candie3 = 5;

   $sumOfCandies = $candie1 + $candie2 + $candie3;

   $tax = 20;

   $totalPriceWithTax = ($tax / 100) * $sumOfCandies;

   $finalPrice = $sumOfCandies + $totalPriceWithTax;


?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Your total is $<?= $finalPrice;?></p>

</body>

</html>