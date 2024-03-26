<?php
/* 

    Create a simple foreach loop for candy products, e.g. Toffee costs 2.99, Mints costs 1.99, and Fudge costs 3.49 and show it in the web page table. 

    Write your code here
     */

     $candyProducts = [
      ["Toffee", 2.99],
      ["Mints", 1.99],
      ["Fudge", 3.49],
     ];

?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    /* 
    Write your code here
     */
    foreach($candyProducts as $candy) : ?>
    <p><?= "Toffee: {$candy[1]}, Mints: {$candy[1]}, Fudge: {$candy[1]}" ?></p>

    
    <?php endforeach?>
  </table>
</body>

</html>