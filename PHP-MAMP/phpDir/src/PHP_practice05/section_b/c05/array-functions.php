<!-- Write PHP Code to create 
-array of greetings (i.e. “Hi”, “Howdy”, “Hello”, “Hola”, “Cia”, “Moi”, “Namaste”, “Welcome”) 
-then display random greeting-find array of best sellers of items (i.e. “notebook”, “pencil”, “ink”) 
-count items and display top items-create an array holding customer details (e.g firstname, lastname, email). 
-and if you have customer first name add it to greeting -->

<?php
// Write PHP code here

$greetings = ['Hi', 'Howdy', 'Hello', 'Hola', 'Cia', 'Moi', 'Namaste', 'Welcome'];

$randomGreetings = array_rand($greetings);
$greet = $greetings[$randomGreetings];

$items = array('notebook', 'pencil', 'ink', 'calculator', 'school bag');
$count = count($items);

function selectProducts($items)
{
    $selectedProducts = [];
 
    foreach ($items as $product) {
        if ($product === 'notebook' || $product === 'pencil') {
            $selectedProducts[] = $product;
        }
    }
    return $selectedProducts;
}
 
$bestSeller = selectProducts($items);

$customerDetails = ['firstname' => 'John', 'lastname' => 'Doe', 'email' => 'johndoe@mail.com'];

$greetingPlusFname = $greet . ", " . $customerDetails['firstname'];
?>

<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>

<h1>Random greeting = <?= $greet ?></h1>
<h1>Count = <?= $count ?></h1>
<h1>Top items:
    <?php
    $numItems = count($bestSeller);
    $i = 0;
 
    foreach ($bestSeller as $product) {
        echo $product;
        if (++$i !== $numItems) {
            echo " and ";
        }
    }
    ?>

<h1>Greeting plus first name = <?= $greetingPlusFname ?></h1>

<?php include 'includes/footer.php'; ?>