<?php

$basket = [
    "Apple" => 3,
    "Banana" => 4
];

$total = 0;

foreach ($basket as $item => $quantity) {
    echo "$item has $quantity\n";
    $total += $quantity;
    
}

echo "You have $total items\n";