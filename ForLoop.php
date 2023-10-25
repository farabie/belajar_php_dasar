<?php

//for(init statment; kondisi; post statement)
// Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
// Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
// Post statement akan dieksekusi setiap kali diakhir perulangan
// Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true

//Kondisi for loop
// for (; ; ) {
//     echo "Hello For Loop" . PHP_EOL;
// }

$counter = 1;

//Perulangan dengan kondisi
for (; $counter < 10; ) {
    echo "Hello ke $counter" . PHP_EOL;
    $counter++;
}

echo "" . PHP_EOL;

//Perulangan dengan Init Statement
for ($a = 0; $a <= 10; ) {
    echo "Hello Ke A-$a" . PHP_EOL;
    $a++;
}

echo "" . PHP_EOL;

//Perulangan dengan post stament
for ($b = 10; $b >= 1; $b--) {
    echo "Perulangan dengan Post Statement $b" . PHP_EOL;
}


echo "" . PHP_EOL;
//Perulangan dengan alternatif
for ($c = 0; $c <= 10; $c++):
    echo "Perulangan Increment dengan alternatif ke $c" . PHP_EOL;
endfor;

echo "" . PHP_EOL;

for ($c = 10; $c >= 1; $c--):
    echo "Perulangan Decrement dengan alternatif ke $c" . PHP_EOL;
endfor;