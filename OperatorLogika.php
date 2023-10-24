<?php 

$q = true;
$r = false;

echo "Operator dan : ";
//Harus dua2 nya benar
var_dump($q && $r);
// var_dump($q AND $r);
echo "\n";

echo "Operator Or : ";
//Harus salah satu benar
var_dump($q || $r);
// var_dump($q OR $r);
echo "\n";

echo "Operator not : ";
//Operator negasi atau kebalikannya
var_dump(!$q);
echo "\n";

echo "Operator XOR : ";
//Operator negasi atau kebalikannya
var_dump($q xor $r);
// var_dump($q AND $r);
echo "\n";
?>