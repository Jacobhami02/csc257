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
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/suggestionForm.php">Suggestions and Feedback</a></li>
</ul>
</nav>
<!-- TopNavEnd -->
<div class=mainContent><br>
<?php if ($showForm === true) { ?>
<h2 class="formHeader">Suggest a Feature or Give Some Feedback:</h2>
<h3>Fill out the form below to send your suggestion directly to the developer:</h3>
<!-- Form -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <!-- First Name -->
        <label for="firstName" class="formLabel">First Name:</label>
        <input name="firstName" value="<?php echo $formFirstName; ?>" class="formTextbox" <?php echo $required;?>>
        <?php if (!$formFirstName) {echo '<span class="requiredIndicator">*</span>';}?><br><br>
    <!-- Email -->
        <label class="formLabel">Email Address:</label>
        <input name="email" value="<?php echo $formEmail; ?>" class="formTextbox"><br><br>
    <!-- State -->
        <label for="state" class="formLabel">State:</label>
        <select name="state" value="" class="formDropdown" name="state"?>>
        <option value="">Please select a State...</option>
        <?php
        foreach ($myStates as $key => $value) {
          $myAttribute="";
          if ($key === $formState) { 
              $myAttribute="selected";}
          echo "<option value=$key $myAttribute>$value</option>";}?>
        </select><br><br>
    <!-- Suggestion -->
        <label for="suggestion" class="formLabel">Suggestion:</label>
        <textarea name="suggestion" placeholder="Write your suggestion or feedback here." class="formTextbox" <?php echo $required;?>><?php /*Sticky Text Area Feature: */ if(isset($_POST['suggestion'])){echo htmlentities($_POST['suggestion'], ENT_QUOTES);}?></textarea>
        <?php if (!$formSuggestion) {echo '<span class="requiredIndicator">*</span>';}?><br><br>
    <!-- Submit Button   -->
        <input class="submitButton" type="submit" value="Submit">
</form>
<?php } ?>
</div>
</body>
</html>
<?php
?>