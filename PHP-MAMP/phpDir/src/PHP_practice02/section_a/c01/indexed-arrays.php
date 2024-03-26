<?php

/* 
  Write you php code here

   */
  $best_sellers = ["Chocolate Mints", "Fudge", "Bubble gum", "Toffee", "Jelly Beans"];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>
  <p>Our top 3 best sellers are 
    <? foreach ($best_sellers as $best) {
      echo '<li>' . $best . '<br>';
    }?>
</body>

</html>