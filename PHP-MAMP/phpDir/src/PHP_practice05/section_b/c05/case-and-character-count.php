<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<!-- Write PHP Code to convert case in lowercase, uppercase, count number of characters and word count -->

<p>
  /** Write your code here */ 
  
  <?= strtolower("HELLO");?>
  <?= strtoupper("hello");?>
  <?= strlen("hello");?>
  <?= str_word_count("helllo");?>

</p>

<?php include 'includes/footer.php'; ?>