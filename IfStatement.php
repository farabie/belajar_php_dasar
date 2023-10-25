<?php

$nilai = 70;
$absen = 50;

//Contoh if else
if ($nilai >= 70 && $absen >= 80) {
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Maaf Anda Belum Beruntung" . PHP_EOL;
}

$nilaiUmum = 90;
$nilaiKeterampilan = 90;

if ($nilaiUmum >= 90 && $nilaiKeterampilan >= 90) {
    echo "Anda Mendapatkan nilai A" . PHP_EOL;
} else if ($nilaiUmum >= 80 && $nilaiKeterampilan >= 80) {
    echo "Anda Mendapatkan nilai B" . PHP_EOL;
} else if ($nilaiUmum >= 70 && $nilaiKeterampilan >= 70) {
    echo "Anda Mendapatkan nilai C" . PHP_EOL;
} else if ($nilaiUmum >= 60 && $nilaiKeterampilan >= 60) {
    echo "Anda Mendapatkan nilai D" . PHP_EOL;
} else if ($nilaiUmum >= 60 && $nilaiKeterampilan >= 60) {
    echo "Anda Mendapatkan nilai E" . PHP_EOL;
} else {
    echo "Maaf anda tidak lulus" . PHP_EOL;
}

//Syntax alternatif
$nilaiPraktek = 70;
$nilaiTeori = 30;
if ($nilaiPraktek >= 90 && $nilaiTeori >= 90):
    echo "Anda mendapatkan nilai A" . PHP_EOL;
elseif ($nilaiPraktek >= 80 && $nilaiTeori >= 80):
    echo "Anda mendapatkan nilai B" . PHP_EOL;
elseif ($nilaiPraktek >= 70 && $nilaiTeori >= 70):
    echo "Anda mendapatkan nilai C" . PHP_EOL;
elseif ($nilaiPraktek >= 60 && $nilaiTeori >= 60):
    echo "Anda mendapatkan nilai D" . PHP_EOL;
elseif ($nilaiPraktek >= 50 && $nilaiTeori >= 50):
    echo "Anda mendapatkan nilai E" . PHP_EOL;
else:
    echo "Anda Tidak lulus" . PHP_EOL;
endif;
?>