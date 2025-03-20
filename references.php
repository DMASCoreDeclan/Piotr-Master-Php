<?php

$person = "John";
$client = &$person;
var_dump($person, $client);

$client = "Declan";
var_dump($person, $client);

$person = "Mary";
var_dump($person, $client);