<?php 

$a = 10;
$b = 11;

echo "Operator Pre Increment: ";
$preIncrement = ++$a;
//naikan 1 angka lalu naikan
var_dump($a);
echo "\n"; 

echo "Operator Post Increment: ";
$postIncrement = $a++;
//Kembalikan $a lalu naikan 1 angka
var_dump($a);
echo "\n"; 

echo "Operator Post Increment: ";
$postIncrement = $b--;
//Kembalikan $a lalu naikan 1 angka
var_dump($b);
echo "\n"; 

echo "Operator Pre Increment: ";
$postIncrement = --$b;
//Kembalikan $a lalu naikan 1 angka
var_dump($b);
echo "\n"; 

?>