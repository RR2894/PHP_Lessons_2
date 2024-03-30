<?php

class Calculator
{
    // inizialization constructor method
    public function __construct()
    {
    }

    // defining Calculator methods
    public function add($sum1, $sum2)
    {
        return $sum1 + $sum2;
    }
    public function substraction($sum1, $sum2)
    {
        return $sum1 - $sum2;
    }
    public function multiplication($sum1, $sum2)
    {
        return $sum1 * $sum2;
    }
    public function division($sum1, $sum2)
    {
        if ($sum1 || $sum2 == 0) {
            return "ERROR. Cannot divide by 0";
        } else {
            return $sum1 / $sum2;
        }
    }
}

// instance of calculator class to check wether objects are created
$calculator = new Calculator();


?>