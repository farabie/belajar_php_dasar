<?php

$data = [1,2,3,4,5,6,7,8,9,10];

//Mengubah data array dengan callback
var_dump(array_map(fn($data) => $data *2, $data));
var_dump(array_map(fn($data) => $data, $data));

//Mengambil semua keys milik array
var_dump(array_keys($data));

//Mengambil semua value milik array
var_dump(array_values($data));

//Membalikan Array
$number = [1,3,7,4,5,9,];
rsort($number);
echo "Array Kebalik" . PHP_EOL;
var_dump($number);

//Mengurutkan array
$number2 = [1,3,7,4,5,9,];
sort($number2);
echo "Array Urut" . PHP_EOL;
var_dump($number2);

//Mengubah posisi data di array secara random
$number2 = [1,3,7,4,5,9,];
shuffle($number2);
echo "Array Shuffle" . PHP_EOL;
var_dump($number2);

?>