<?php
include "includes/data_layer.php";

$statesArray = getStates(); // The return value of the getStates function will be an array

// print_r($statesArray); // use print_r to output an array
// echo $statesArray['VT'];

// $myDestinations = getDestinations(); // The return value of the getDestinations function will be an array
// print_r($myDestinations); // use print_r to output an array

// Test the function for retrieving state by abbreviation
echo getStateNameByAbbreviation('VT');
