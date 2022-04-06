<?php

// NOTE: We're using require_once to ensure these libraries are only included
// once across any/all files participating in the application
require_once "includes/data_layer.php";

// Variables used to determine form processing, validity and display
$isProcessingForm = false;          // Flag for determining if we are in the middle of processing the form
$isFormValid = true;				// Assume form is valid unless we find otherwise
$showForm = true;                   // Use a separate flag to show the HTML form

// Set variables up front to avoid errors when the form hasn't been posted
$form_firstName = null;
$form_lastName = null;
$form_state = null;
$form_preferredDestination = null;
$form_city = null;
$form_comments = null;
$form_email = null;
$form_emailList = null;
$form_terms = null;

// Validation variables -- set them to true by default, letting the individual
// conditions override the state
$isFirstNameValid = true;
$isLastNameValid = true;
$isCityValid = true;
$isStateValid = true;
$isEmailListValid = true;

// Determine if the form data should be processed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isProcessingForm = true; // Only start processing the form once the submit button has been pressed
}

// If we're processing the form (i.e., the form has been POSTed),
// set the values for our working variables
if ($isProcessingForm) {
    $form_firstName = $_POST["firstName"];
    $form_lastName = $_POST["lastName"];
    $form_city = $_POST["city"];
    $form_state = $_POST["state"];
    $form_preferredDestination = $_POST["preferredDestination"];

    // NOTE: To process checkboxes and radio buttons, we'll use isset()

    // Use ternary operators here -- not required, but good time for an example
    $form_emailList =  isset($_POST['mailingList']) ? $_POST['mailingList'] : null;
    $form_terms = isset($_POST['terms']) ? $_POST['terms'] : null;
    
    // Start validation
    // Test to make sure that all required fields are present

    // Test first name
    if (empty($form_firstName)) {
        $isFormValid = false;
        $isFirstNameValid = false;
    }

    // Test last name
    if (empty($form_lastName)) {
        $isFormValid = false;
        $isLastNameValid = false;
    }

    // Test city
    if (empty($form_city)) {
        $isFormValid = false;
        $isCityValid = false;
    }

    // Test state
    if (empty($form_state)) {
        $isFormValid = false;
        $isStateValid = false;
    }

    // Test email list
    if (empty($form_emailList)) {
        $isFormValid = false;
        $isEmailListValid = false;
    }

    // Next, test checkbox
    if (empty($form_terms)) {
        $isFormValid = false;
        $isTermsValid = false;
    }

    // NOTE: This is hardcoded right now
    //       We'll be changing this after the break 
    
    // Convert the posted value of state to something that is user friendly
    
    // We can now leverage our function we created in the data layer
    // Use a ternary to ensure form_state is not empty before calling the function
    $userFriendlyState = $form_state ? getStateNameByAbbreviation($form_state) : "";

    // NOTE: We no longer need the code below... which was too brittle anyway
    // switch($form_state) {
    //     case "CT":
    //         $userFriendlyState = "Connecticut";
    //         break;
    //     case "NY":
    //         $userFriendlyState = "New York";
    //         break;
    //     case "NJ":
    //         $userFriendlyState = "New Jersey";
    //         break;
    // }

    // Convert the posted value of preferred destination to something that is user friendly
    
    // Another way to retrieve the value based on the key:
    // Use a ternary to ensure form_preferredDestination is not empty before calling the function
    $userFriendlyDestination = $form_preferredDestination ? getDestinations()[$form_preferredDestination] : "";

    // NOTE: We no longer need the code below... which was too brittle anyway
    // switch($form_preferredDestination) {
    //     case "EC":
    //         $userFriendlyDestination = "Eastern Caribbean";
    //         break;
    //     case "WC":
    //         $userFriendlyDestination = "Western Caribbean";
    //         break;
    // }

    // If form is valid, do not show the form
    if ($isFormValid) {

        echo "Thank you $form_firstName. We have recorded the following entry:<br><br>";
        echo "<strong>Name:</strong> $form_firstName $form_lastName<br>";
        echo "<strong>City:</strong> $form_city<br>";
        echo "<strong>Residence:</strong> $userFriendlyState<br>";
        echo "<strong>Preferred Destination:</strong> $userFriendlyDestination<br>";

        echo "<br><br>";

        if ($form_emailList === "yes") {
            echo "You have opted to be on our mailing list.";
        } else {
            echo "You have not opted to be on our mailing list.";
        }

        // Hide the form since we're done processing
        $showForm = false;
    } else { // The form is not valid
        echo "<div style='color: red; font-weight: bold'>Please fill in all the required fields:</div><br>";
        if (!$isFirstNameValid) { echo "Please enter your first name.<br>"; };
        if (!$isLastNameValid) { echo "Please enter your last name.<br>"; };
        if (!$isCityValid) { echo "Please enter your city.<br>"; };
        if (!$isStateValid) { echo "Please choose a State.<br>"; };
    }
}

