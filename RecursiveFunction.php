<?php 

//Recursive function adalah function yang memanggil function dirinya sendiri
//Factorial
function factorialLoop(int $value) {
    $total = 1;
    for($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump( factorialLoop(6) );

function factorialRecursive(int $value) {
    if($value == 1) {
        return 1;
    }else {
        return $value * factorialRecursive($value-1);
    }
}

var_dump( factorialRecursive(6) );

?>