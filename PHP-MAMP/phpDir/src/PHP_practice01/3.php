<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
$i = 7;
 if ($i < 10) {
	echo "I love PHP";
 } else if($i > 10) {
	echo "error";
 }

 for ($x = 1; $x <= 10; $x++) {
	if ($x == 11) break;
	echo $x;
}

$favNum = "seven";

switch ($favNum) {
  case "eight":
    echo "Your favorite number is eight!";
    break;
  case "four":
    echo "Your favorite number is four!";
    break;
  case "two":
    echo "Your favorite number is two!";
    break;
  case "one":
	echo "Your favorite number is one";
  case "nine":
	echo "Your favorite number is nine";
  default:
    echo "You don't know what your favorite number is!";
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>