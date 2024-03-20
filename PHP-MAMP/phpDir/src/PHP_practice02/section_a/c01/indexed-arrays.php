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
    <?php echo '<li>' . $best_sellers[0]?></p>
    <?php echo '<li>' . $best_sellers[1]?></p>
    <?php echo '<li>' . $best_sellers[2]?></p>
</body>

</html>