<?php

declare(strict_types=1);

function add(int $a, int $b) {
    $c = $a + $b;
    return "$a + $b = $c";
}

echo add((int)3.0, 3);
