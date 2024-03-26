<?php

/* 
  
  Write a PHP code to  create and store array in a  variable called $nutrition with fat, sugar and salt and display the contents of Nutrition (per 100G) in percentage

  Write you php code here

   */

  $nutrition = [
    ["fat", 30],
    ["sugar", 50],
    ["salt", 10]
  ];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat: <?php echo $nutrition[0][1]?>%</p>
  <p>Sugar: <?php echo $nutrition[1][1]?>%</p>
  <p>Salt: <?php echo $nutrition[2][1]?>%</p>
</body>

</html>