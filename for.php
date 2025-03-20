<?php

echo "Rocket launch countdown \n";

for ($i = 10; $i >0; $i-- ) {
    echo "$i...\n";

    if ($i == 1) {
        echo "Lift off \n";
    }

    sleep(1);
}