<?php

function sum(...$numbers) {
    $sum = 0;
    var_dump($numbers);
    foreach($numbers as $number) {
        echo "$sum plus $number is ";
        $sum += $number;
        echo "$sum\n";
    }
    echo "The total of those numbers is: $sum\n";
    return $sum;
}
sum(1);
sum(2, 3, 4, 5);

function introduceTeam($teamName, ...$members) {
    echo "TeamName: $teamName \n";
    $number = count($members);
    echo "$number\n";
    echo "Members: " . implode(", ", $members);
}

introduceTeam("A Team", "John", "Mary", "Declan");