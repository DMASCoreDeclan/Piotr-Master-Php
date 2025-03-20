<?php


$greet = function ($name) {
    return "Hello, $name\n";
};

echo $greet("Declan");

$message = "Bye";
$greet2 = function ($name) use (&$message) {
    $message = $message . "!";
    return "$message, $name\n";
};
echo $greet2("Declan");
echo $message;

// $numbers = [1, 2, 3];

// $squared = array_map(function ($n) {
//     return $n * $n;
// }, $numbers);

// var_dump($numbers, $squared);
// print_r($numbers);
// print_r($squared);

// // https://www.php.net/manual/en/function.array-map.php

// function cube($n)
// {
//     return ($n * $n * $n);
// }

// $a = [1, 2, 3, 4, 5];
// $b = array_map('cube', $a);
// print_r($b);
// var_dump($a, $b);
