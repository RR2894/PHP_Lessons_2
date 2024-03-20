<?php
/* Run and visualize the code
Hit the URL
http://localhost:8005/PHP_practice06/section_b/c06/get-1.php?city=Helsinki

TRY: In the browser's address bar, remove the query string from URL
and reload the page. It will display two errors.

This is because city name was not in the query string and thus was not added to
$_GET superglobal array.

Step 1: $cities variable hold an associative array. Each key is name of different city;
each value is address for a branch of the store in that city. 

Step 2: Name of the city is collected from $_GET superglobal array 
and stored in a variable called $city. 

Step 3: Name of the city is used to select address of branch in that city from
array created in step 1, and store it in variable called $address

Step 4:  A foreach loop works through each element in $cities array

Step 5: Inside the loop, a link is created for each city. The name of city is written out in
query string, and again as link text. This shows how PHP can create links, how those links
can point to a single file that can display different data. 

Step 6: The value that were stored in the $city and $address variables in Step 2 and 3 
are displayed in the page. 

*/
$cities = [
  'Helsinki' => '48 Store Street, WC1E 7BS',
  'Sydney' => '151 Oxford Street, 2021',
  'London' => '1242 7th Street, 10492'
];

$city = $_GET['city'];
$address = $cities[$city];

?>
<?php include 'includes/header.php' ?>

<?php foreach ($cities as $key => $value) { ?>
  <a href="get-1.php?city=<?= $key ?>"> <?= $key ?></a>
<?php } ?>

<?php include 'includes/footer.php' ?>