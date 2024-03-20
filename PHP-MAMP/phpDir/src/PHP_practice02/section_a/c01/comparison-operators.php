<?php

/* 

  Write a PHP code to compare and check if the quantity wanted is less than or equal to quantity in stock. If the user can buy based on comparison and if value is true, page should show 1 and if false, the page should show nothing.

  Write you php code here

   */

   $stockQuantity = 8;
   $wantedQuantity = 5;

   if ($wantedQuantity <= $stockQuantity) {
    echo 1;
  } else {
    return null;
  };

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

</body>

</html>