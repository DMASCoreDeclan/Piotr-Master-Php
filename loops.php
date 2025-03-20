<?php

$largeArray = range(1, 1_000_000);


$startTime = microtime(true);

$out = [];

foreach ($largeArray as $value) {
    $out = $value * 2;
}

$endTime = microtime(true);

echo $startTime . "\n";

echo $out . "\n";

$totalTime = $endTime - $startTime;

echo $totalTime . "\n";