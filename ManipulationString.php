<?php

$name = "Abie";

//PHP_EOL berfungsi untuk mengakhir dari statement tersebut

//Dot Operator
echo "Nama: " . $name . PHP_EOL;
echo "Nilai: " . 100 . PHP_EOL;

//Konversi ke number dan sebaliknya

$valueString = (string) 100;
var_dump($valueString);

//Kalau dia berupa huruf untuk konversinya jadi ke integer akan jadi int(0)
$valueInt = (int) "200";
var_dump($valueInt);

$valueFloat = (float) "100.10";
var_dump($valueFloat);

//Mengakses Karakter
$nameSaya = "Abie";

echo $nameSaya[0] . PHP_EOL;
echo $nameSaya[1] . PHP_EOL;
echo $nameSaya[2] . PHP_EOL;
echo $nameSaya[3] . PHP_EOL;

//Variable Parsing
$nameParsing = "Amb";
echo "Hello $nameParsing, Selamat belajar" .PHP_EOL;

//Curly Brace berfungsi untuk mengabungkan variable dengan string tanapa ada spasi

$var = "Var";
echo "This is ${var}s". PHP_EOL;

    ?>