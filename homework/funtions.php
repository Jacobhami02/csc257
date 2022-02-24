<?php

// A simple funtion to echo out "hello" to the screen

//Remember void funtions and value-returning functions from C++

//Use include fileName.php to link other pages of code to the file in use.

function sayHello($name) {
    return "Hello $name!";
}

echo sayHello("Jim");

?>