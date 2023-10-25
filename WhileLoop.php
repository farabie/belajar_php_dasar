<?php

//While loop merupakan perulangan lebih sederhana dibandingan for

$counter = 0;
$counterDecrement = 10;

// while ($counter <= 10) {
//     echo "Hello While Loop Ke-" . $counter . PHP_EOL;
//     $counter++;
// }

// echo "" . PHP_EOL;

// while ($counterDecrement >= 1) {
//     echo "Hello While Loop Decrement Ke-" . $counterDecrement . PHP_EOL;
//     $counterDecrement--;
// }

echo "" . PHP_EOL;

//Syntax alternatif dari while loop
while ($counter <= 10):
    echo "Hello While Loop alternatif ke-" . $counter . PHP_EOL;
    $counter++;
endwhile;

echo "" . PHP_EOL;

//Syntax Decrement alternatif dari while loop
while ($counterDecrement > 1):
    echo "Hello While Loop alternatif ke-" . $counterDecrement . PHP_EOL;
    $counterDecrement--;
endwhile;
?>