<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quizz Electronics Incorperated</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
#form {
  
  background-color:navy;color:white;padding:3%;
  border: 5px solid rgb(226, 226, 226);
  width: 500px;
  font-size: 16px;
  line-height: 30px; 
  padding: 5px;
}
</style>
<body id="">  
<form id="form" action="quizHandler.php" method="post">
<?php include "quizHandler.php"; ?>
    <!-- State -->
    <label class="form_label">Your State:</label>
    <select id="state" name="state" class="form_dropdown" required>
        <option value="">Please select a State...</option>
        <option value="CT">Connecticut</option>
        <option value="NY">New York</option>
        <option value="NH">New Hamshire</option>
    </select>

    

    <br>

    <!-- Device -->
    <label class="form_label">Your State:</label>
    <select id="device" name="device" class="form_dropdown" required>
        <option value="">Please select a State...</option>
        <option value="TV">Television</option>
        <option value="TP">Telephone</option>
        <option value="PC">Computer</option>
    </select>
<br>
<br>
    <input type="submit" value="Contact Us">
</form>

<strong>Copyright @ 2014 - 2022 Quizz Electronics Incorperated</strong>

</body>
</html>