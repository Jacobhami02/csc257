<!DOCTYPE html>
<html lang="en">
<head>
<title>
    Cruise Entry Form 
</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div style="background-color:navy;color:white;padding:3%;">

<h2 id="cruiseTitleStyle" class="fontSize"><u>Cruise Entry Form</u></h2>
  <h4>Type your first name below:</h4>
<form action="handler.php" method="post" name="form1" id="form1">
  <input type="text">
<!-- </form> -->

<h4>Type your last name below:</h4>
<!-- <form> -->
  <input type="text">
<!-- </form> -->

<h4>Type your city below:</h4>
<!-- <form> -->
  <input type="text">
<!-- </form> -->


<!-- <form> action="/action_page.php" -->
  Select your state of departure below: <br><br>
  <select> <!-- name="subject" id="subject" -->
    <option value="" selected="selected">Select State</option>
    <option value="CT" >Connecticut </option>
    <option value="NY" >New York </option>
    <option value="NJ" >New Jersey </option>
    <option value="NH" >New Hampshire </option>
    <option value="MA" >Massachusetts </option>
    <option value="VT" >Vermont </option>
    <option value="RI" >Rhode Island </option>
  </select>
  <br>
<!-- </form> -->

<!-- <form  > action="/action_page.php" -->
  Select your destination below: <br><br>
  <select> <!-- name="subject" id="subject" -->
    <option value="" selected="selected">Select Destination</option>
    <option value="Eastern Caribbean" >Eastern Caribbean </option>
    <option value="Southern Caribbean" >Southern Caribbean </option>
    <option value="Western Caribbean" >Western Caribbean </option>
    <option value="Bermuda" >Bermuda </option>
    <option value="Bahamas" >Bahamas </option>
  </select>
  <br><br>

  <input type="radio" value="yes">

  <input type="checkbox" required>  
  <label>I accept the terms and conditions.</label>
  <br><br>

  
<button type="submit" >Submit</button>
</form>
</div>

<div style="padding:3%;">
  <a href="http://localhost:8080/csc257/classwork/test.php">
  <button type="button">Page One</button>
  </a>
</div>
</DOCTYPE html>
</html>