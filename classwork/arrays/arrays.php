<?php

// Two types of array: indexed, associative

    // Create an array of States
    $statesArray = array(
        "Connecticut",
        "Virginia",
        "California",
        "Rhode Island",
        "Texas",
        "New York",
        "West Virgia",
        "Oregon"
    );
//    print_r($statesArray);

    // Create an associative array of States
    // $statesAssociateArray = array();
    // $statesAssociateArray['CT'] = "Connecticut";
    // $statesAssociateArray['NY'] = "New York";
    // $statesAssociateArray['RI'] = "Rhode Island";

    $statesAssociateArray = array(
        "CT" => "Connecticut",
        "NY" => "New York",
        "RI" => "Rhode Island",
        "NJ" => "New Jersey"
    );
    
    print_r($statesAssociateArray);

