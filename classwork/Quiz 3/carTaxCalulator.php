<?php

function taxCalculator($yearPurchased, $yearSold, $salePrice, $costBasis, $ownerStatus, $incomeLevel){

$yearsOwned=$yearSold-$yearPurchased;

if($ownerStatus === "single" && $incomeLevel > 50000){
    $payTaxes=1;
}
elseif($ownerStatus === "single" && $incomeLevel <= 50000){
    $payTaxes=0;
}
elseif($ownerStatus === "married" && $incomeLevel <= 80000){
    $payTaxes=0;
}
else{
    $payTaxes=1;
}


if ($payTaxes===1){
    if($yearsOwned <=1){
        $intTwo = 33 / $salePrice;
        $finalTax = $intTwo * 100;
    }
    else{
        $intOne = 15 / $salePrice;
        $finalTax= $intOne * 100;
    }
}
else{
    $finalTax = 0;
}

    return $finalTax;
}

echo taxCalculator(2020, 2022, 10000, 30000, "single", 70000);

?>