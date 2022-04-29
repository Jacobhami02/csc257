<?php
require_once "dataLayer.php";

$isProcessingForm = false;          
$isFormValid = true;				
$showForm = true;                   

$formFirstName = null;
$formState = null;
$formEmail = null;
$formSuggestion = null;

$isFirstNameValid = true;
$isSuggestionValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isProcessingForm = true; 
}

if ($isProcessingForm) {
    $formFirstName = $_POST["firstName"];
    $formState = $_POST["state"];
    $formEmail = $_POST["email"];
    $formSuggestion = $_POST["suggestion"];

    if (empty($formFirstName)) {
        $isFormValid = false;
        $isFirstNameValid = false;
    }

    if (empty($formSuggestion)) {
        $isFormValid = false;
        $isSuggestionValid = false;
    }

    if ($isFormValid === true) {
        echo "<br><br><p style='text-indent: 50px; font-size: 20px;'>Thank you $formFirstName. We have recieved your feedback and will review it as soon as possible.
        Thank you for your feedback!</p>";

        recordEntry($formFirstName, $formEmail, $formState, $formSuggestion);

        $showForm = false;

    } else {
        echo "<div style='color:red; font-size:20px; padding-top:1em; padding-left:1em;'>Please put at least your first name and suggestion in the boxes below.</div>";
    }
}