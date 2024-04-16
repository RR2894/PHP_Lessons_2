<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

// Step 1
echo '<a href="9.php?source=2334353">Click Here</a>';

// Step 2
$cookie_name = "cookie";
$cookie_value = "value";
$expiry_time = time() + (7 * 24 * 60 * 60);
setcookie($cookie_name, $cookie_value, $expiry_time, "/");

// Step 3 - Start a session and set it to a value
session_start();
$_SESSION['session_value'] = "session_data";

echo htmlspecialchars($_GET['source'] ?? '');

?>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>