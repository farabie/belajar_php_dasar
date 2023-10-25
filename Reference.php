<?php

$name = "Abie";

//Assign By Reference memungkinkan kita membuat beberapa variable dengan value yang sama
$otherName = & $name;
$otherName = "Cembul";

echo $name . PHP_EOL;


//Pass By Reference
function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

//Returning References untuk mengembalikan reference pada function
function &getValue() {
    static $value = 100;
    return $value;

}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
?>