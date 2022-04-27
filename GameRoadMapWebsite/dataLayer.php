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
    $results = $conn->query($sql);// Add this to get error: or die($conn->error)

    return $results;
}

/**
 * Return a array of US States
 * 
 * @return  array   An array of states
 */
function getStates() {
    // Get the results
    $results = queryDatabase("select * from state order by name");

    // 4. Output the results
    $statesArray = array(); // Create an empty array

    while($row = $results->fetch_assoc()) { // Loop over the results from the query
        $statesArray[$row['abbreviation']] = $row['name']; // Build the array
    }

    // Return the array
    return $statesArray;
}

function recordEntry($firstName, $email, $state, $suggestion){
    date_default_timezone_set('America/New_York');
    $dateTime = date('Y-m-d H:i:s');

    queryDatabase("INSERT INTO suggestionResponses (`firstName`, `email`, `state`, `suggestion`, `time`) VALUES ($firstName, $email, $state, $suggestion, $dateTime)");
}