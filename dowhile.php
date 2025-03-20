<?php

do {
    $diceRoll = rand(1,6);
    echo "you rolled a $diceRoll\n ";
    if ($diceRoll == 6) {
        echo "Congratulations, you hit the jackpot 🎉🎉\n";
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));
} while ( 'y' == $rollAgain);