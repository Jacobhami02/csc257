<?php

// NOTE: We're using require_once to ensure these libraries are only included
// once across any/all files participating in the application
require_once "dataLayer.php";

// Variables used to determine form processing, validity and display
$isProcessingForm = false;          // Flag for determining if we are in the middle of processing the form
$isFormValid = true;				// Assume form is valid unless we find otherwise
$showForm = true;                   // Use a separate flag to show the HTML form

// Set variables up front to avoid errors when the form hasn't been posted
$formFirstName = null;
$formState = null;
$formEmail = null;
$formTextSuggestion = null;
$formTerms = null;

// Validation variables -- set them to true by default, letting the individual
// conditions override the state
$isFirstNameValid = true;
$isStateValid = true;
$isEmailValid = true;
$isTextSuggestionValid = true;
$isTermsValid = true;

// Determine if the form data should be processed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isProcessingForm = true; // Only start processing the form once the submit button has been pressed
}

// If we're processing the form (i.e., the form has been POSTed),
// set the values for our working variables
if ($isProcessingForm) {
    $formFirstName = $_POST["firstName"];
    $formState = $_POST["state"];
    $formEmail = $_POST["email"];
    $formTextSuggestion = $_POST["suggestion"];
    $formTerms = isset($_POST['terms']) ? $_POST['terms'] : null;

    // Test first name
    if (empty($formFirstName)) {
        $isFormValid = false;
        $isFirstNameValid = false;
    }

    // Test email
    if (empty($formEmail)) {
        $isFormValid = false;
        $isEmailValid = false;
    }

    // Test state
    if (empty($formState)) {
        $isFormValid = false;
        $isStateValid = false;
    }

    // Test Suggestion Box
    if (empty($formTextSuggestion)) {
        $isFormValid = false;
        $isTextSuggestionValid = false;
    }

    // Next, test checkbox
    if (empty($formTerms)) {
        $isFormValid = false;
        $isTermsValid = false;
    }
    if ($isFormValid === true) {
        echo "Thank you $formFirstName. We have recorded the following entry:<br><br>";
        echo "<strong>Name:</strong> $formFirstName<br>";
        echo "<strong>Residence:</strong> $formState<br>";
        echo "<br><br>";

        // recordEntry($formFirstName, $formEmail, $formState, $formTextSuggestion);

        $showForm = false;

    } else {
        echo "<div style='color: red; font-weight: bold'>Please fill in all the required fields:</div>";
    }
}
