<?php

function calculateVAT($amount) {
    $vatRate = 0.15; 
    $vat = $amount * $vatRate;
    return $vat;
}


$amount = 100; 
$vat = calculateVAT($amount);

echo "The VAT on $" . number_format($amount, 2) . " is $" . number_format($vat, 2) . ".";
?>