<?php
// $_POST -> method="post"
// $_GET -> method ="get"
// $_REQUEST -> method="get", then method="post"

// For debugging
// print_r($_POST);

// Set variables to the posted values -- not a requirement, but makes it easier
$state = $_POST['state'];
$productType = $_POST['productType'];

// Conditional logic -- many possible ways to satisfy the requirements


/*
If the user chooses Connecticut or New York AND Telephone, show this number: 800-555-1212
If the user chooses New Hampshire (any products): 866-444-2221
If the user chooses Connecticut or New York AND TV or computer, show this number: 877-333-3312
*/

// Example: One possible option

// if (($state === "CT" || $state === "NY") && $productType === "Telephone") {
//     echo "800-555-1212";
// }
// if ($state === "NH") {
//     echo "866-444-2221";
// }
// if (($state === "CT" || $state === "NY") && ($productType === "TV" || $productType === "Computer")) {
//     echo "877-333-3312";
// }

// Example: Another possible option

if ($state === "NH") {
    echo "866-444-2221";
} elseif ($productType === "Telephone") {
    echo "800-555-1212";
} else {
    echo "877-333-3312";
}