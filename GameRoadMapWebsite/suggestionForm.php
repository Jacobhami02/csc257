<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/suggestionForm.php">Suggestions</a></li>
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/aboutDevPage.php">About The Game</a></li>
</ul>
</nav>
<!-- TopNavEnd -->

<!-- Form -->


<form id="suggestionForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <!-- First Name -->
    <label for="firstName" class="formLabel">First Name:</label>
    <input id="firstName"
        class="formTextbox" 
        name="firstName" 
        value="<?php echo $formFirstName; ?>" 
        type="text"
        <?php echo $required; ?>>
    <span class="requiredIndicator">*</span>
    <br>    

    <!-- Last Name -->
    <label for="lastName" class="form_label">Last Name:</label>
    <input id="lastName"
        class="formTextbox"
        name="lastName"
        value="<?php echo $formLastName; ?>" 
        type="text"
        <?php echo $required; ?>>
    <span class="requiredIndicator">*</span>

    <br>

    <!-- City -->
    <label for="city" class="form_label">City:</label>
    <input id="city"
        class="formTextbox"
        name="city"
        value="<?php echo $form_city; ?>" 
        type="text"
        <?php echo $required; ?>>
    <span class="requiredIndicator">*</span>

    <br>

    <!-- State -->
    <label for="state" class="formLabel">Your State:</label>
    <select id="state"
        class="formDropdown"
        name="state"
        <?php echo $required; ?>>

        <option value="">Please select a State...</option>
        <?php
            // Associate array

            // Use the HTML attribute 'selected' for the default value
            // $form_state stores the chosen key
            // For example, $form_state="NJ"
            foreach ($myStates as $key => $value) {
                $myAttribute="";

                // Check the value of the array key and check against the value
                // of the dropdown when the user submitted the form
                if ($key === $form_state) { 
                    $myAttribute="selected";
                }
                echo "<option value=$key $myAttribute>$value</option>";
            }
        ?>
    </select>
    <span class="requiredIndicator">*</span>

    <br>

    <!-- Preferred Destination -->
    <label for="preferredDestination" class="formLabel">Preferred Destination:</label>
    <select id="preferredDestination"
        name="preferredDestination"
        class="formDropdown"
        <?php echo $required; ?>>

        <option value="">Please select a destination...</option>
        <?php
            foreach($destinationsArray as $key => $value) {
                // Check the value of the array key and check against the value
                // of the dropdown when the user submitted the form

                // Another option is to merge the loginc into a single line using a ternary and concatenation
                echo "<option value=$key " . ($key===$form_preferredDestination ? 'selected' : '') . ">$value</option>";
            }
        ?>
    </select>

    <br><br>

    <!-- Mailing list -->
    <label>Do you want to be on our mailing list?</label>
    <input type="radio"
        id="mailingListYes"
        name="mailingList"
        value="yes"
        <?php echo $required; ?>>
    <label for="mailingListYes">Yes</label>

    <input type="radio"
        id="mailingListNo"
        name="mailingList"
        value="no"
        <?php echo $required; ?>>
    <label for="mailingListNo">No</label>
    
    <br><br>

    <!-- Terms -->
    <input type="checkbox"
        name="terms"
        <?php echo $required; ?>>I accept the terms<br>
        
    <input type="submit" value="Submit your entry">
</form>



</body>
</html>