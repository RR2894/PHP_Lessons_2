<!-- Idea of this second task 02 is to write PHP code to do the measurement conversion for: Temperature, speed, and mass.

Temperature:
Convert temperature from Celsius to Fahrenheit
Convert temperature from Celsius to Kelvin

Speed:
Convert kilometers per hour to meters per second
Convert kilometers per hour to knots

Mass:
Convert kilogram to grams
Convert grams to kilograms

How to proceed?

1. Create a folder inside phpDir of src of PHP-MAMP
2. You can write your code inside that folder
3. Feel free to use any technique: with or without OOPs (object oriented programming)
4. Feel free to use any CSS styling, HTML syntax
5. Keep it simple (e.g. three input box for A. Temperature, B. Speed or C. Mass and displaying those result is enough) -->

<form method="post" action="">
    <h2>Temperature converter</h2>
    <label for="celsius">Enter temperature in Celsius:</label>
    <input type="number" name="celsius" id="celsius"><br>
    <input type="submit" name="convertToFahrenheit" value="Convert to Fahrenheit">
    <input type="submit" name="convertToKelvin" value="Convert to Kelvin">
</form>

<?php
if (!empty($_POST['celsius'])) {
    $celsius = $_POST['celsius'];
    if(isset($_POST['convertToFahrenheit'])) {
        echo "$celsius Celsius is " . (($celsius * 9/5) + 32) . " Fahrenheit";
    }
    
    if(isset($_POST['convertToKelvin'])) {
        echo "$celsius Celsius is " . ($celsius + 273.15) . " Kelvin";
    }
} else {
    echo "Please input a temperature";
}
?>

