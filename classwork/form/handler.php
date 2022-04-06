<?php

// $_POST -> method="post"
// $_GET -> method ="get"
// $_REQUEST -> method="get", then method="post"

// Set variables to match input form elements
// First name, last name, city, preferred destination, state, email list

// print_r($_POST);

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$city = $_POST["city"];
$state = $_POST["state"];
$preferredDestination = $_POST["preferredDestination"];
$mailingList = $_POST["mailingList"];

// Convert the posted value of state to something that is user friendly
$userFriendlyState = "";
switch($state) {
    case "CT":
        $userFriendlyState = "Connecticut";
        break;
    case "NY":
        $userFriendlyState = "New York";
        break;
    case "NJ":
        $userFriendlyState = "New Jersey";
        break;
}

// Convert the posted value of preferred destination to something that is user friendly
$userFriendlyDestination = "";
switch($preferredDestination) {
    case "easterncaribbean":
        $userFriendlyDestination = "Eastern Caribbean";
        break;
    case "westerncaribbean":
        $userFriendlyDestination = "Western Caribbean";
        break;
}

echo "Thank you $firstName. We have recorded the following entry:<br><br>";
echo "<strong>Name:</strong> $firstName $lastName<br>";
echo "<strong>City:</strong> $city<br>";
echo "<strong>Residence:</strong> $userFriendlyState<br>";
echo "<strong>Preferred Destination:</strong> $userFriendlyDestination<br>";

echo "<br><br>";

if ($mailingList === "yes") {
    echo "You have opted to be on our mailing list.";
} else {
    echo "You have not opted to be on our mailing list.";
}


