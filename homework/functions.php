<?php

// A simple funtion to echo out "hello" to the screen

//Remember void funtions and value-returning functions from C++

//Use include fileName.php to link other pages of code to the file in use.

// function sayHello($name) {
//     return "Hello $name!";
// }

// echo sayHello("Jim");

function calculateTax($subtotal){

    $ct = 6.35;
    $ny = 7.00;
    $tax = $ct / 10;
    $total = $tax + $subtotal;
    return $total;
};

function stateArrayReturn($stateName){
    $stateArray = array(
        "CT"=>"Connecticut",
        "NY"=>"New York",
        "NJ"=>"New Jersey",
        "RI"=>"Rhode Island",
        "MA"=>"Massachusetts"
    );
    return $stateArray[$stateName];
}

function destinationArrayReturn($destinationName){
    $destinationArray = array(
        "EC"=>"Eastern Caribbean",
        "WC"=>"Western Caribbean",
        "SC"=>"Southern Carribbean",
        "BH"=>"Bahamas",
        "BD"=>"Bermuda"
    );
        return $destinationArray[$destinationName];
}


echo calculateTax(10.00);
?>