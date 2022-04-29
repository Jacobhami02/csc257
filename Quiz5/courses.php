<?php

function queryDatabase($sql) {
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $port = "3307";
    $db = "csc257";

    $conn = new mysqli($serverName, $userName, $password ,$db, $port);

    $results = $conn->query($sql);
    return $results;}

    function getCourses() {
        $results = queryDatabase("SELECT * FROM `course` ORDER BY Course_Name ASC;");
    
        $courses = array(); 
    
        while($row = $results->fetch_assoc()) { 
            $courses[$row['Course_Name']] = $row['NumberOfStudents'] = $row['Department'];
        }
    
        return $results;
    }
    $getCourses = getCourses();
?>
<!DOCTYPE html>
<html lang="en">
<body>
<!-- List -->
Here Are the courses Below: <?php print_r($getCourses); ?>
</body>
</html>

<!-- I am getting so confused on how to pull from servers. I understand completely how to push
but pulling is so complex and I keep getting lost in old code. I understand how to make a connection with the server
but not how to pull multiple rows.
-->

<!-- SQL INSERT STATMENT:  INSERT INTO course (`Course_ID`, `Course_Name`, `Department`, `NumberOfStudents`) VALUES ('123', 'Music Theory', 'Arts', '15'), ('124', 'Art History', 'Arts', '11'), ('125', 'PHP', 'Computer Science', '21'), ('126', 'English', 'English', '18'), ('127', 'Algebra', 'Mathematics', '33'), ('128', 'Anthropology', 'History', '13'); -->
<!-- SQL CALL STATEMENT:   SELECT * FROM `course` ORDER BY Course_Name ASC; -->