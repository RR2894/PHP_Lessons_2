<?php
/* 
Create a simple switch statement to get 20% off chocolates on Monday and 20% off mints on Tuesday, and in all other cases, it should show “Buy three packs, get one free.”

Write your code here */

$dayOfWeek = "Monday" && "Tuesday"; 

$chocolatePrice = 10;
$mintPrice = 15;
$discount = 0.20; 

$offer = "Buy three packs, get one free!";

?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  /* Write your code here */
  switch ($dayOfWeek) {
    case "Monday":
      $discountedChocolatePrice = $chocolatePrice * (1 - $discount);
      echo "20% off chocolates! Price: $" . $discountedChocolatePrice;
    case "Tuesday":
      $discountedMintPrice = $mintPrice * (1 - $discount);
      echo "20% off mints! Price: $" . $discountedMintPrice;
      break;
    default:
      echo $offer;
      break;
  }
  ?>
</body>

</html>