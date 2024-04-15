<!-- 
The idea of this first task is to write PHP code to make a simple calculator

addition
subtraction
multiplication
division
Requirements/Specs

Create a folder e.g. “calculator” inside phpDir of src of PHP-MAMP
- You can write your code inside that folder
- Feel free to use any CSS styling, HTML syntax
- Use Object oriented approach (e.g. using class, constructor)
- Keep it simple 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="number" name="number1" placeholder="Number..." required>
        <select name="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <input type="number" name="number2" placeholder="Number..." required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    
    
    <?php
    
        $num1 = $_POST['number1'] ?? '';
        $num2 = $_POST['number2'] ?? '';
        $operation = $_POST['operation'] ?? '';
        
        require_once 'calculator.php';

        switch ($operation) {
            case 'addition':
                $result = $calculator->add($num1, $num2);
                break;
            case 'subtraction':
                $result = $calculator->substraction($num1, $num2);
                break;
            case 'multiplication':
                $result = $calculator->multiplication($num1, $num2);
                break;
            case 'division':
                $result = $calculator->division($num1, $num2);
                break;
            default:
                $result = "Invalid operation";
        }

        // Display the result
        echo "Result: $result";
    ?>

        </body>
        
        </html>