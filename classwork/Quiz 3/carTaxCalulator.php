<?php
function taxCalculator($yearPurchased, $yearSold, $salePrice, $costBasis, $ownerStatus, $incomeLevel){

$yearsOwned = $yearSold - $yearPurchased;
$profit = $costBasis - $salePrice;

if($ownerStatus === "single" && $incomeLevel > 50000){
    $payTaxes=1; }
elseif($ownerStatus === "single" && $incomeLevel <= 50000){
    $payTaxes=0; }
elseif($ownerStatus === "married" && $incomeLevel <= 80000){
    $payTaxes=0; }
else{
    $payTaxes=1; }

if ($payTaxes===1){
    if($yearsOwned <= 1){
        $finalTax = .33 * $salePrice; }
    else{
        $finalTax= .15 * $salePrice; }}
else{
    $finalTax = 0; }

    return $finalTax; }

echo taxCalculator(2020, 2022, 28000, 30000, "married", 20000);
?>