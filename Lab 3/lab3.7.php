<?php

echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($i = 1; $i <= 3; $i++) {
    echo "<tr>";  
    

    echo "<td>";
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "</td>";
 
    echo "<td>";
    for ($j = 1; $j <= (4 - $i); $j++) {
        echo $j;
    }
    echo "</td>";

    echo "<td>";
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j];
    }
    echo "</td>";
 
    echo "</tr>"; 
}
 

echo "</table>";
?>