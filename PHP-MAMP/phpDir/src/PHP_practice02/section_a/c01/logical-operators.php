<!-- Write a PHP code to check if the customer only wants to buy limited packs of candy. Check if there are enough items in stock and secondly check that the item can be delivered. You can put imaginery number to do the comparision. -->

<?php $item    = 'Chocolate';
$stock   = 5;
$wanted  = 3;
$deliver = true;
$can_buy = (($wanted <= $stock) && ($deliver == true));
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Logical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h1>Shopping Cart</h1>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Ordered: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>
    <br>
    <?php 
    ?>
  </body>
</html>