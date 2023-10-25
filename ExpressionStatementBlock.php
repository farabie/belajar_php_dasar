<?php

//Setiap Kode yang ditulis dalam bahas php ini itu semua adalah expression
//Secara sederhana expression adalah apapun yang memiliki nilai atau value

$a = 5;
$b = $a;

echo $a;
echo "\n";

//Contoh Expression Complex

function getValue() {
    return 100;
}

$value = getValue();
echo $value;
echo "\n";

//Statement adalah kalimat lengkap dalam bahasa
// Sebuah statement berisikan execution komplit biasanya diakhiri dengan ;

$name = "Muhammad Farabie";

echo $name;
echo "\n";

$date = new DateTime();

var_dump($date);

//Block adalah kumpulan statement yang terdiri dari nol atau lebih statement
//Bloc diawali dengan kurung kurawal {}

function runApp($name) {
    echo "Start Program" .PHP_EOL;
    echo "Hello $name" .PHP_EOL;
    echo "End Program" .PHP_EOL;
    
}

$runApp = runAPP("Abie");

echo $runApp;

?>