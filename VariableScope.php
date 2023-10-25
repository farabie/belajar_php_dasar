<?php

/*  
Ada tiga jenis variable dalam php:
1. global
2. local
3. static

1. Global
Variable yang dibuat diluar function memiliki scope global
Variable di scope global hanya bisa diakses dari luar function
Artinya di dalam function, kita tidak bisa mengakses variable di global scope
*/

$name = "budi"; //global scope
$name2 = "agus";
function sayName() {
    global $name;
    echo "Hello $name" . PHP_EOL; // error
}
sayName();

function sayName2() {
    echo "Hello {$GLOBALS['name2']}" . PHP_EOL; // error
}

sayName2();

// function createName() {
//     $name = "Budi"; //Local scope
// }

// createName();
// echo $name; //Error 


//Static Scope
function increment() {
    static $counter = 1;
    echo "Counter: $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();

?>