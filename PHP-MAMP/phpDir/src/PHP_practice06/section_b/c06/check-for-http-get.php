<?php include 'includes/header.php'; ?>

<?php
/* Write your PHP code here
Overall idea here is to instead of POST in prev. practice 
how would you do this with HTTP GET

Step 1: Use null-coalescing operator to check if $_GET superglobal array 
has a value for the key sent. If it does, you can store its value in some variable
If it does not, it should store a blank string. 

Step 2: Using if condition, you can check the value in variable is search. 
If it is, the form should be then sent via HTTP GET and the search term is displayed. 
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form
*/

// Step 1
$sent = $_GET['sent'] ?? "";

// Step 2
if($sent == 'search') {
$term = $_GET['term'] ?? "";
echo 'You searched for ' . htmlspecialchars($term);
 } else {
 ?>
 <form action="check-for-http-get.php" method="GET" > 
 Search for: <input type="search" name="term"> 
 <input type="submit" value="search" name="sent">
 </form>
 
<?php include 'includes/footer.php'; ?>
<?php } ?>

<?php include 'includes/footer.php'; ?>