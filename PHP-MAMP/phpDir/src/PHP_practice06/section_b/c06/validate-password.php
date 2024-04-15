<?php
/* Write PHP code here 

Write PHP code to validate password and also check password strength. 

Following conditions should be checked-Password length must contain >=8 characters-Check if it contains combination of uppercase characters, lowercase characters-And numbers       

Display “Password is valid” once above conditions are fulfilled else display “Password not strong enough”

Step 1: Initialize two variables for password and message.

Step 2: Write a custom function to check password rules

Step 3: Use if statement to check basic expressions each representing true and false
Take a look, mb_strlen() to check if value contains 8 or more characters
Take a look preg_match, https://www.php.net/manual/en/function.preg-match.php

Hint: /[A-Z]/ checks uppercase characters
/[a-z]/ checks lowercase characters
/[0-9]/ checks numbers

Step 4:  If the form is submitted, password can be collected from $_POST superglobal

Step 5: The valid password can be checked by calling custom function 
and the result can be stored in some variable e.g. $valid

Step 6: Display the results. You may use ternary operator here to check if $valid variable holds true,
If so, $message holds success message otherwise, it holds an error message. 

Step 7: Message can be for example "Password is valid" or if not string
"Password is not strong enough."

*/

$password = '';
$message = 'Password is too short, minimun is';
$min = 8;

function is_valid ($password, $min){
    $len = strlen($min);
    if($len < $min){
        // return "$message" . "$min";
    }
    return TRUE;




}?>

<?php include 'includes/header.php'; ?>

/* Write PHP code here */

<?php include 'includes/footer.php'; ?>