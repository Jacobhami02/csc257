<?php

function queryDatabase($sql) {
    // Use a DB connection instead of manually creating an array!

    // Create initial variables for the operation
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $port = "3307";
    $db = "csc257";

    $conn = new mysqli($serverName, $userName, $password ,$db, $port);

    $results = $conn->query($sql);

    return $results;
}

print_r($_POST);

$make = $_POST["make"];
$model = $_POST["model"];
$year = $_POST["year"];
$vin = $_POST["vin"];

$sql = "INSERT INTO Quiz4 (`Make`, `Model`, `Year`, `VIN`) VALUES (make, $model, $year, $vin)";
//                                                                 ^ took the $ out trying to get it to push any kind of data but I can't seem to figure out what I'm doing wrong

// INSERT INTO csc257.`Quiz4` (`Make`, `Model`, `Year`, `VIN`) VALUES ("Honda", "Accord", "2012", "J328934HDASXT");


?>