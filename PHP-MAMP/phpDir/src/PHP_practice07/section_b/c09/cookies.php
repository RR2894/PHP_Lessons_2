<?php session_start();

// Overall idea here is to set cookies and count the number of pages a visitor has viewed.

// Step 1: Create a counter to store number of pages vistor has viewed. Create a cookie to hold that counter variable. 
$counter = $_COOKIE['counter'] ?? 0;

// Step 2: Increment the value of counter, as the visitor has just viewed a page.
$counter++;

// Step 3: Use a setcookie() function to tell the browser to create or update a cookie and also store the value from the variable in that cookie.
setcookie('counter', $counter);

// Step 4: A new variable should hold message saying the number of pages the visitor has viewed. e.g. "Page views: "
$message = 'You have visited this site' . $counter . 'times.';

?>

<?php include 'includes/header.php'; ?>

<p><a href="sessions.php"> Refresh this page </a> to see the page views increase </p>
<?= $message; ?>

<?php include 'includes/footer.php'; ?>