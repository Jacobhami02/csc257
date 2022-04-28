<?php

require_once "dataLayer.php";

$isProcessingForm = false;          
$isFormValid = true;				
$showForm = true;                   

$formFirstName = null;
$formState = null;
$formEmail = null;
$formTextSuggestion = null;

$isFirstNameValid = true;
$isTextSuggestionValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isProcessingForm = true; 
}

if ($isProcessingForm) {
    $formFirstName = $_POST["firstName"];
    $formState = $_POST["state"];
    $formEmail = $_POST["email"];
    $formTextSuggestion = $_POST["suggestion"];
    // $formTerms = isset($_POST['terms']) ? $_POST['terms'] : null;

    // Test first name
    if (empty($formFirstName)) {
        $isFormValid = false;
        $isFirstNameValid = false;
    }

    // Test Suggestion Box
    if (empty($formTextSuggestion)) {
        $isFormValid = false;
        $isTextSuggestionValid = false;
    }

    // $requiredFields=null;

    if ($isFormValid === true) {
        echo "<br><br><p style='text-indent: 50px; font-size: 20px;'>Thank you $formFirstName. We have recieved your suggestion and will review it as soon as possible.
        Thank you for your feedback!</p>";

        recordEntry($formFirstName, $formEmail, $formState, $formTextSuggestion);

        $showForm = false;

    } else {
        echo "<div style='color:red; font-size:20px; padding-top:1em; padding-left:1em;'>Please put at least your first name and suggestion in the boxes below.</div>";
    }
}
