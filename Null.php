<?php 

$name = "Farabie";
$adress = NULL;
$age = null;

echo $name;
echo "\n";
echo $adress;
echo "\n";
echo $age;
echo "\n";

//Cek kondisi null
var_dump( is_null($adress));

$contoh = "Abie";
unset($contoh);

$contoh = "Abie";
$contoh = null;

var_dump(isset($contoh));

?>