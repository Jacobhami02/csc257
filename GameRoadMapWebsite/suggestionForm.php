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
  <li id="topButtonSpacing"><a href="/csc257/GameRoadMapWebsite/suggestionForm.php">Suggestions</a></li>
</ul>
</nav>
<!-- TopNavEnd -->
<div class=mainContent><br>
<?php if ($showForm === true) { ?>
<h3>Fill out the form below to send your suggestion directly to the developer:</h3><br>
<!-- Form -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <!-- First Name -->
        <label for="firstName" class="formLabel">First Name:</label>
        <input name="firstName" value="<?php echo $formFirstName; ?>" class="formTextbox" <?php echo $required;?> <?php if(!$formFirstName && $isProcessingForm) echo 'requiredHighlight';?>>
        <?php if (!$formFirstName) {echo '<span class="requiredIndicator">*</span>';}?><br><br>
    <!-- Email -->
        <label class="formLabel">Email Address:</label>
        <input name="email" value="<?php echo $formEmail; ?>" class="formTextbox" <?php echo $required; ?> <?php if(!$formEmail && $isProcessingForm) echo 'requiredHighlight';?>>
        <?php if (!$formEmail) {echo '<span class="requiredIndicator">*</span>';}?><br><br>
    <!-- State -->
        <label for="state" class="formLabel">State:</label>
        <select name="state" value="<?php echo $formState; ?>" class="formDropdown" name="state" <?php echo $required; ?>>
      <option value="">Please select a State...</option>
      <?php
        foreach ($myStates as $key => $value) {
          $myAttribute="";
          if ($key === $form_state) { 
              $myAttribute="selected";}
          echo "<option value=$key $myAttribute>$value</option>";}?>
        </select>
        <?php if (!$formState) {echo '<span class="requiredIndicator">*</span>';}?><br><br>
    <!-- Suggestion -->
        <label for="suggestion" class="formLabel">Suggestion:</label>
        <textarea name="suggestion" value="<?php echo $formTextSuggestion; ?>" class="formTextbox" <?php echo $required;?> <?php if(!$formTextSuggestion && $isProcessingForm) echo 'requiredHighlight';?>></textarea>
        <?php if (!$formTextSuggestion) {echo '<span class="requiredIndicator">*</span>';}?><br><br>
    <!-- Terms -->
        <input type="checkbox" name="terms" value="<?php echo $formTerms; ?>" class="termsBox"
        <?php echo $required; ?>>I accept the terms<br><br>
    <!-- Submit Button   -->
        <input class="submitButton" type="submit" value="Submit">
</form>
<?php } ?>
</div>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>