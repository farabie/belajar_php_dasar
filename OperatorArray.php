<?php

$a = ["first_Name" => "Abie",];
$b = ["last_name" => "Farabie"];

$c = ["first_Name" => "Abie", "last_name" => "Farabie"];
$d = ["last_name" => "Farabie", "first_Name" => "Abie"];

echo "Operator Union: ";
//Mengabungkan array $a dan $b
var_dump($a + $b);
echo "\n";

echo "Operator Equaity: ";
//True jika $a dan $b memilik key value sama
//Ini dianggap sama karena memiliki keyvalue yang sama
var_dump($c == $d);
echo "\n";

echo "Operator Identity: ";
//True jika $a dan $b memiliki key value sama dan posisi sama
var_dump($c === $d);
echo "\n";

echo "Operator Inquatity: ";
//True jika $a dan $b tidak sama
var_dump($a != $b);
echo "\n";

echo "Operator Inquatity: ";
//True jika $a dan $b tidak sama
var_dump($a <> $b);
echo "\n";

echo "Operator Tidak identiik: ";
//True jika $a dan $b tidak identitik
var_dump($a !== $b);
echo "\n";

?>