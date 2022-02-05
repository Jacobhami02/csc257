<head>
    <title>
        First Website
    </title>
</head>
<!-- The shortcut for commenting out a 
     line of code in any language on windows is ctrl+/ -->
<body>
    <br><br>Line One: <br><br>

    <?php
    echo "Hello World,";
    ?>

    how are you?<br><br>

    <?php
    // Double quotes"" use value of the varible, single quotes'' use the name of the variable
    $var1 = 4;
    $var2 = 4;
    $var3 = 6;
    $var4 = 1;
    $var5 = $var3 + $var4;

    $firstName = "Jacob";
    $lastName = "Hamilton";

    echo $var1 + $var2;
    ?>
    <br><br>
    <?php
    echo $var5;
    ?>

    <a href="http://localhost:8080/csc257/homework/02-02-202_form.php">
    <button type="button">Page Two</button>
    </a>

</body>