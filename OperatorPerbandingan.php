<?php

$a = 10;
$b = "20";
$c = 30;

//Kalau == (sama dengan)
//kalau === (identik)

echo "Sama dengan tetapi dia di konversi dulu datanya $a == $b: ";
var_dump($a == $b);
echo "\n";
echo "Sama dengan tetapi harus memiliki tipe data yang sama $a === $b: ";
var_dump($a === $b);
echo "\n";
echo "Tidak sama dengan setelah konversi tipe data $a != $b:";
var_dump($a != $b);
echo "\n";
echo "Tidak sama dengan setelah konversi tipe data $a <> $b: ";
var_dump($a <> $b);
echo "\n";
echo "Tidak sama dengan harus memiliki tip data yang sama $a !== $b :";
var_dump($a !== $b);
echo "\n";
echo "Kurang dari $a < $c: ";
var_dump($a < $c);
echo "\n";
echo "Lebih dari $a > $c: ";
var_dump($a > $c);
echo "\n";
echo "Kurang dari sama dengan $a <= $c: ";
var_dump($a <= $c);
echo "\n";
echo "Lebih dari sama dengan $a >= $c: ";
var_dump($a >= $c);
echo "\n";
?> 