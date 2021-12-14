<?php
//A Lambda is an anonymous function that can be assigned to a variable or passed to another function as an argument
// Anonymous function
// assigned to variable
$greeting = function () {
    return "Hello world";
}

// Call function
echo $greeting();
// Returns "Hello world"
?>