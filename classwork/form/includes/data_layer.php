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
    $port = "3306";
    $db = "csc257";

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
    $results = queryDatabase("select * from state order by state_name");

    // 4. Output the results
    $statesArray = array(); // Create an empty array

    while($row = $results->fetch_assoc()) { // Loop over the results from the query
        $statesArray[$row['state_abbreviation']] = $row['state_name']; // Build the array
    }

    // Return the array
    return $statesArray;
}

/**
 * Return a array of travel destinations
 * 
 * @return  array   An array of destinations
 */
function getDestinations() {
    // Get the results
    $results = queryDatabase("select * from destination order by destination_name");

    // 4. Output the results
    $destinationsArray = array(); // Create an empty array

    while($row = $results->fetch_assoc()) { // Loop over the results from the query
        $destinationsArray[$row['destination_abbreviation']] = $row['destination_name']; // Build the array
    }

    // Return the array
    return $destinationsArray;
}

/**
 * Return a single state name
 * 
 * @param   string  abbreviation    A state abbreviation
 * 
 * @return  string                  A single state name
 */
function getStateNameByAbbreviation($abbreviation) {
    // 1. Use an array of states
    $statesArray = getStates();

    // 2. Find the state based on an abbreviation
    $stateName = $statesArray[$abbreviation];

    // 3. Return the state name found
    return $stateName;
}