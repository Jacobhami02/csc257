<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cruise Entry Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="grad">  
<form id="cruise_form" action="formHandler.php" method="post">
    <!-- First Name -->
    <label for="firstName" class="form_label">First Name:</label>
    <input id="firstName" class="form_textbox" name="firstName" type="text" required>
    
    <br>    

    <!-- Last Name -->
    <label for="lastName" class="form_label">Last Name:</label>
    <input id="lastName" class="form_textbox" name="lastName" type="text" required>

    <br>

    <!-- City -->
    <label for="city" class="form_label">City:</label>
    <input id="city" class="form_textbox" name="city" type="text" required>

    <br>
    
    <!-- State -->
    <label for="state" class="form_label">Your State:</label>
    <select id="state" name="state" class="form_dropdown" required>
        <option value="">Please select a State...</option>
        <option value="CT">Connecticut</option>
        <option value="MA">Massachusetts</option>
        <option value="NY">New York</option>
        <option value="NJ">New Jersey</option>
        <option value="RI">Rhode Island</option>
    </select>

    <br>

    <!-- Preferred Destination -->
    <label for="preferredDestination" class="form_label">Preferred Destination:</label>
    <select id="preferredDestination" name="preferredDestination" class="form_dropdown" required>
        <option value="">Please select a destination...</option>
        <option value="easterncaribbean">Eastern Caribbean</option>
        <option value="westerncaribbean">Western Caribbean</option>
        <option value="southerncaribbean">Southern Caribbean</option>
        <option value="bahamas">Bahamas</option>
        <option value="bermuda">Bermuda</option>
    </select>

    <br>

    <!-- Mailing list -->
    <label class="form_label">Do you want to be on our mailing list?</label>
    <input type="radio" id="mailingList_yes" name="mailingList" value="yes" required>
    <label for="mailingList_yes">Yes</label>
    <input type="radio" id="mailingList_no" name="mailingList" value="no" required>
    <label for="mailingList_no">No</label>

    <br><br>

    <!-- Terms -->
    <input type="checkbox" required>I accept the terms and conditions.<br>

    <input type="submit" value="Submit your entry">
</form>

<!-- include footer -->
<?php include "include_footer.php"; ?>

<!-- page link button -->
<div style="padding:3%;">
  <a href="http://localhost:8080/csc257/classwork/test.php">
  <button type="button">Page One</button>
  </a>
</div>

<!-- ----- -->
</body>
</html>
