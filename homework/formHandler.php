<?php

print_r($_POST);
echo "<br><br>";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$city = $_POST["city"];
$state = $_POST["state"];
$preferredDestination = $_POST["preferredDestination"];
$mailingList = $_POST["mailingList"];

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
    case "RI":
        $userFriendlyState = "Rhode Island";
        break;
    case "MA":
        $userFriendlyState = "Massachusetts";
        break;   
}

$userFriendlyDestination = "";
switch($state) {
    case "easterncaribbean":
        $userFriendlyDestination = "Eastern Caribbean";
        break;
    case "westerncaribbean":
        $userFriendlyDestination = "Western Caribbean";
        break;
    case "southerncaribbean":
        $userFriendlyDestination = "Southern Caribbean";
        break;   
    case "bahamas":
        $userFriendlyDestination = "Bahamas";
        break;   
    case "bermuda":
        $userFriendlyDestination = "Bermuda";
        break;       
}

$stateArray = array(
    1 => "CT",
    2 => "NY",
    3 => "NJ",
    4 => "RI",
    5 => "MA",
);

$destinationsArray = array(
    "CT" => "Connecticut",
    "NY" => "New York",
    "NJ" => "New Jersey",
    "RI" => "Rhode Island",
    "MA" => "Massachusetts",
);

var_dump($stateArray);
var_dump($destinationArray);

echo "Thank you $firstName. We have recorded the following entry:<br><br>";
echo "<strong>Name:</strong> $firstName $lastName<br>";
echo "<strong>City:</strong> $city<br>";
echo "<strong>Residence:</strong> $userFriendlyState<br>";
echo "<strong>Preferred Desitination:</strong> $userFriendlyDestination<br>";

echo "<br><br>"

// if ($mailingList === "yes"){
//     echo "You have been opted into our mailing list.";
// } else {
//     echo "You have not been opted into our mailing list.";
// }

// $_POST -> method="post"
// $_GET -> method ="get"
// $_REQUEST -> method="get", then method="post"



?>