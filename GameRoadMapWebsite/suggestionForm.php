
<!-- 
    When setting up server, you can use this to create table: 

CREATE TABLE `participant` (  `participant_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,  `last_name` varchar(50) NOT NULL,  `city` 
  varchar(50) NOT NULL,  `email_address` varchar(100) NOT NULL,  `state` 
  varchar(30) NOT NULL,  `preferred_destination` varchar(30) DEFAULT NULL,  
  `preferred_cruiseline` varchar(30) DEFAULT NULL,  `mailing_list` varchar(3) 
  NOT NULL,  PRIMARY KEY (`participant_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
-->
<?php
    require_once "dataLayer.php";
    require_once "formValidation.php";
    
    $myStates = getStates();

    $required = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">
  <title>Raindrop Roadmap</title>
  <link rel="stylesheet" href="mainStyles.css">
  <link rel="stylesheet" href="formStyles.css">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
</head>
<body class="background">
<!-- TopNav -->
<nav>
<ul  id="topNav">
  <li><img class="logo" src="/csc257/GameRoadMapWebsite/images/RainDropLogo.jpg"></li>
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/MainPage.php">Home</a></li>
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/aboutDevPage.php">About The Game</a></li>
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/suggestionForm.php">Suggestions</a></li>
</ul>
</nav>
<!-- TopNavEnd -->
<div class=mainContent>
<h3>Fill out the form below to send your suggestion directly to the developer:</h3>
<!-- Form -->
<form class="suggestionForm">
    <!-- First Name -->
        <label>First Name:</label>
        <input <?php echo $required; ?>>
        <span class="requiredIndicator">*</span><br>
    <!-- Email -->
        <label>Email Address:</label>
        <input <?php echo $required; ?>>
        <span class="requiredIndicator">*</span><br>
    <!-- State -->
        <label for="state" class="formLabel">State:</label>
        <select>
        <?php echo $required; ?>>

<option value="">Please select a State...</option>
<?php
    // Associate array

    // echo "<option value=>$value</option>";
    // Use the HTML attribute 'selected' for the default value
    // $form_state stores the chosen key
    // For example, $form_state="NJ"
    foreach ($myStates as $value) {
        $myAttribute="";

        echo "<option value=$value>$value</option>";}
    
?>
        </select>
        <span class="requiredIndicator">*</span><br>

        <!-- Terms -->
        <input type="checkbox"
        name="terms"
        <?php echo $required; ?>>I accept the terms<br>
            
        <input type="submit" value="Submit your entry">




</form>

</div>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>