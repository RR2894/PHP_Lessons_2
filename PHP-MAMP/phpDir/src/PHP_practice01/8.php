<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside> <!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	
    // Step 1: Make a variable with some text as a value
    $text = "This is some text.";

    // Step 2: Use crypt() function to encrypt it with a salt
    $salt = '$2a$07$usesomadasdsadsadsadasdasdsaehtoa';
	
    // Step 3: Assign the crypt result to a variable
    $encrypted_text = crypt($text, $salt);
	
    // Step 4: Output the variable
    echo "Original text: " . $text . "<br>";
    echo "Encrypted text: " . $encrypted_text;
    ?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>