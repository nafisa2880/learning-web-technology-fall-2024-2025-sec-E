<?php

function checkOddEven($number) {
    if ($number % 2 == 0) {
        return "$number is even.";
    } else {
    
        return "$number is odd.";
    }
}

$number = 5; 
echo checkOddEven($number);
?>