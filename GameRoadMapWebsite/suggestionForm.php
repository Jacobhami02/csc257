
<!-- 
    When setting up server, you can use this to create table: 

CREATE TABLE `participant` (  `participant_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,  `last_name` varchar(50) NOT NULL,  `city` 
  varchar(50) NOT NULL,  `email_address` varchar(100) NOT NULL,  `state` 
  varchar(30) NOT NULL,  `preferred_destination` varchar(30) DEFAULT NULL,  
  `preferred_cruiseline` varchar(30) DEFAULT NULL,  `mailing_list` varchar(3) 
  NOT NULL,  PRIMARY KEY (`participant_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
-->
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
  
<!-- Form -->
<form class="suggestionForm">



</form>

</div>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>