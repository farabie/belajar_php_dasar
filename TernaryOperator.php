<?php
$gender = "PRIA";
$hi = null;

//Bukan Ternary
if ($gender == "PRIA") {
    $hi = "Halo bro";
} else {
    $hi = "Halo Sis";
}

echo $hi . PHP_EOL;


//Pakai Ternary
$kota = "MEDAN";
$halo = null;

($kota == "MEDAN") ? $halo = "Halo Medan" : $halo = "Halo Sanak";
echo $halo . PHP_EOL;

?>