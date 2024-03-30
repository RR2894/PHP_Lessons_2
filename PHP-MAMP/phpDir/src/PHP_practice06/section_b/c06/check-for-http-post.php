<?php include 'includes/header.php'; ?>

<?php
/* Write PHP Code here  

Write a PHP code for checking wether a form has been submitted. You can use $_SERVER superglobal array for specific REQUEST_METHOD which stores the HTTP method used to request the page. Whatever user inserts in input box should be displayed e.g. "You searched for ..." (replace ... with term user searched for)

Overall idea here is to check if a form has been submitted


Step 1: Use if statement to check $_SERVER superglobal array to see if the key called
REQUEST_METHOD has a value of POST

Step 2: If it does, the search form has to be sent via HTTP POST, 
and a message should be displayed like this:
  "You searched for ..."  (replace ... with term user searched for)

Step 3: Otherwise, simply display the form

*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $term = $_POST['term'];
    echo 'You searched for ' . htmlspecialchars($term);
} else {
    ?>
    <form action="check-for-http-post.php" method="POST">
        Search for: <input type="search" name="term">
        <input type="submit" value="search">
    </form>
    <?php include 'includes/footer.php';
}
?>

<?php include 'includes/footer.php'; ?>