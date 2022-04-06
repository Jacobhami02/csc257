<?php

function calculateTax($yearPurchased, $yearSold, $salePrice, $costBasis, $ownerStatus, $incomeLevel) {
    $yearsOwned = $yearSold - $yearPurchased;
    $profit = $salePrice - $costBasis;

    // If they are under the limit, there are no taxes!
    if (
        ($ownerStatus === 'single' && $incomeLevel < 50000) ||
        ($ownerStatus === 'married' && $incomeLevel < 80000)
     ) {
        return 0;
    }
    
    // if ($yearsOwned > 1) {
    //     return .15 * $profit; // long term capital gains tax
    // } else {
    //     return .33 * $profit; // own tax bracket
    // }
    return $yearsOwned > 1 ? (.15 * $profit) : (.33 * $profit);
}

echo calculateTax(2021, 2022, 30000, 10000, 'single', 80000);








