<?php

$size = "L";

echo "\nSwitch Result: \n";

switch ($size) {
    case "S":
    case "M":
        echo "Small or Medium size\n";
    case "L":
    case "X":
        echo "Large or Extra Large size\n";
    default:
        echo "Unknown Size\n";
}

echo "\nSwitch Result with break: \n";

switch ($size) {
    case "S":
    case "M":
        echo "Small or Medium size\n";
        break;
    case "L":
    case "X":
        echo "Large or Extra Large size\n";
        break;
    default:
        echo "Unknown Size\n";
}


echo "\nIf Result: \n";

if ($size == "S" || $size =="M") {
    echo "Small or Medium size\n";
} elseif ($size == "L" || $size == "X") {
    echo "Large or Extra Large size\n";
} else {
    echo "Unknown Size\n";
}

echo "\nCorrect Switch without Break: \n";

$badAttempts = 0;

switch($badAttempts) {
    case 3:
        echo "You've run out of attempts\n";
    default:
        echo "Bad attempt detected\n";
}