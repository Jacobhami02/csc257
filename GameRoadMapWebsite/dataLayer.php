<?php
/**
 * Establish a connection and query the database and return results
 * 
 * @param string  sql        A SQL statement
 * 
 * @return object results  A query result
 */
function queryDatabase($sql) {
    // Use a DB connection instead of manually creating an array!

    // Create initial variables for the operation
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $port = "3307";
    $db = "websiteSuggestionForm";

    // 1. Create a connection
    $conn = new mysqli($serverName, $userName, $password ,$db, $port);

    // 2. Get the results and return
    $results = $conn->query($sql);

    return $results;
}

/**
 * Return a array of US States
 * 
 * @return  array   An array of states
 */
function getStates() {
    // Get the results
    $results = queryDatabase("select * from state order by StateName");

    // 4. Output the results
    $statesArray = array(); // Create an empty array

    while($row = $results->fetch_assoc()) { // Loop over the results from the query
        $statesArray = [$row['StateName']]; // Build the array
    }

    // Return the array
    return $statesArray;
}