<html>
<head>
<title>
    Cruise Entry Form 
</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div style="background-color:navy;color:white;padding:3%;">
<style>
  /* .fontSize{ 
    font-weight: 50000;
  }
  #cruiseTitleStyle{
    font-size: 100px;
}*/
</style>
<h2 id="cruiseTitleStyle" class="fontSize"><u>Cruise Entry Form</u></h2>
  <h4>Type your first name below:</h4>
<form>
  <input type="text">
</form>

<h4>Type your last name below:</h4>
<form>
  <input type="text">
</form>

<form name="form1" id="form1" > <!-- action="/action_page.php" -->
  Select your state of departure below: <br><br>
  <select> <!-- name="subject" id="subject" -->
    <option value="" selected="selected">Select State</option>
    <option value="" >CT </option>
    <option value="" >NY </option>
    <option value="" >NJ </option>
    <option value="" >NH </option>
    <option value="" >MA </option>
    <option value="" >VT </option>
    <option value="" >RI </option>
  </select>
  <br>
</form>

<form action="handler.php" method="post" name="form1" id="form1" > <!-- action="/action_page.php" -->
  Select your destination below: <br><br>
  <select> <!-- name="subject" id="subject" -->
    <option value="" selected="selected">Select Destination</option>
    <option value="" >Eastern Caribbean </option>
    <option value="" >Southern Caribbean </option>
    <option value="" >Western Caribbean </option>
    <option value="" >Bermuda </option>
    <option value="" >Bahamas </option>
  </select>
  <br><br>

<button type="submit" >Submit</button>
</form>
</div>

<div style="padding:3%;">
  <a href="http://localhost:8080/csc257/classwork/test.php">
  <button type="button">Page One</button>
  </a>
</div>
</html>