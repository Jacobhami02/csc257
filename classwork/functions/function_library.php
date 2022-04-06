<?php

/**
 * Simple function to return a welcome message
 * 
 * @param string fname The first name of the person
 * @param string lname The last name of the person
 * 
 * @return string A simple string 
 */
function sayHello($fname, $lname) {
    return "Hello $fname $lname!";
}

/**
 * Simple function to return an array of fruits
 * 
 * @return array Array of fruits
 */
function getFruits() {
    $fruitsArray = array('Bananas', 'Apples', 'Pears');
    return $fruitsArray;
}

/**
 * Register a name and state
 * 
 * @param string name The full name of the person
 * @param string state The person's state abbreviation
 * 
 * @return string A string/message
 */
function register($name, $state = "") {
    // Step 1: If name or state are empty, let the user know that these are required
    // if (empty($name) || empty($state)) {
    //     return "You need to provide a name and state!";
    // }

    // Assume name and state are provided
    $isNameEmpty = false;
    $isStateEmpty = false;
    $message = ""; // The return message

    // I want to itemize name and state messages if either are empty
    if (empty($name)) {
        $isNameEmpty = true;
        $message .= "You need to provide a name.<br>";
    }
    if (empty($state)) {
        $isStateEmpty = true;
        $message .= "You need to provide a state.<br>";
    }

    // if ($isNameEmpty) {
    //     $message .= "You need to provide a name.<br>";
    // }
    // if ($isStateEmpty) {
    //     $message .= "You need to provide a state.<br>";
    // }

    if ($isNameEmpty || $isStateEmpty) {
        return $message;
    }
    
    return "Thank you $name, you are registered.";
}

