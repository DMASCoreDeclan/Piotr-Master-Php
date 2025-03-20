<?php

function greet($name) {
    return "Hello $name\n";
}


echo greet("Declan");


function greetWithTime($name, $time = "day") {
    return "Good $time $name \n";
}

echo greetWithTime("Declan", "afternoon");
echo greetWithTime("Declan", );