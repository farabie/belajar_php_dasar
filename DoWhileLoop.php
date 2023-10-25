<?php

$counter = 0;
$cd = 10;

//Untuk dowhile tidak ada alternatifnya
do {
    echo "Hallo DowhileLoop ke $counter" . PHP_EOL;
    $counter++;
} while ($counter < 10);

echo "" . PHP_EOL;

do {
    echo "Hallo DowhileLoop Increment $cd" . PHP_EOL;
    $cd--;
} while ($cd > 1);
?>