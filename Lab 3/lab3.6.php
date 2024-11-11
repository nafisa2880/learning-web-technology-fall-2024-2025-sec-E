<?php

$array = array("moon", "nafisa", "anjum");


$a = "nafisa";


$found = false;


foreach ($array as $element) {
    if ($element == $a) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element '$a' found in the array!";
} else {
    echo "Element '$a' not found in the array.";
}
?>
