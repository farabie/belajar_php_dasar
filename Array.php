<?php 


$values = array(1, 2, 3, "abie");
var_dump($values);

$names = ["Farabie", "Botol", "capek"];
var_dump($names);

//Mengakses data di array nomor index
var_dump($names[1]);

//Mengubah data di array pada nomor index
$names[0] = "Kereta";
var_dump($names[0]);

//Menambah data di array pada posisi belakang
$names[] = "mobil";
var_dump($names);

//Menghapus data di array by index
unset($names[0]);
var_dump($names);

count($names)
?>