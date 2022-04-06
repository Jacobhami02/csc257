<?php

/*
 Create a function:
1. Takes a subTotal as an argument (or parameter)
2. Calculates the tax rate -- 6.35% against the subTotal
3. Return the total

Label this function: calculateTax
 */
function calculateTax($subTotal, $state) {
    // $taxRate = 0.0635;
    $taxRates = array(
        "NY" => 0.0700,
        "CT" => 0.0635
    );

    $currentTaxRate = $taxRates[$state];

    $total = ($subTotal * $currentTaxRate) + $subTotal;
    return $total;
}


