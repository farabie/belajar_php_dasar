<?php

//For each merupakan perulanagan yang biasa digunakan untuk mengakses array

//Tidak menggunakan for each
$data = ["Amb", "Saya", "Aku"];
for ($i = 0; $i < count($data); $i++) {
    echo "Hello $data[$i]" . PHP_EOL;
}

echo ("" . PHP_EOL);


//For Each Array
$nama = ["Abie", "Farel", "Kanta"];
foreach ($nama as $names) {
    echo "Hello $names" . PHP_EOL;
}

//For each dengan key

$dataPegawai = ["nama_pegawai" => "Abie", "alamat_pegawai" => "perumahan blalaba", "no_ktp" => 121234, "no_rumah" => 41];
foreach ($dataPegawai as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}



?>