<?php

/*
Open this in browser and visualize

Step 1: Read the code in include files
Step 2: Try to login and see how the page layout looks

*/

include 'includes/sessions.php';
include 'includes/header-member.php';
?>

<h1>Home</h1>
<p><b>Not logged in:</b> navigation bar shows a link to log in.</p>
<p><b>Logged in:</b> navigation bar shows a link to log out.</p>

<?php include 'includes/footer.php'; ?>