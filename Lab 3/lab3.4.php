<?php

function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return "$num1 is the largest number.";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return "$num2 is the largest number.";
    } else {
        return "$num3 is the largest number.";
    }
}

$num1 = 10; 
$num3 = 71;
$num2 = 28; 

echo findLargest($num1, $num2, $num3);
?>