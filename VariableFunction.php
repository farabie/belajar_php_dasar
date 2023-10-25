<?php
//Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable

Function foo() {
    echo "Fooo" . PHP_EOL;
}

Function boo() {
    echo "Boo" . PHP_EOL;
}

$functionName = "foo"; //untuk value nya sendiri itu harus disesuaikan dengan nama functionnya
$functionName();

$functionName = "boo";
$functionName();

//Penggunaan Variable Function
function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "". $finalName . PHP_EOL;
}

function sampleFullName(string $name): string { 
    return "Sample $name";
}

sayHello("Abie", "strtoupper"); //Ini yang dipanggil pertama variable kemudian kedua functionnya
sayHello("Farel","strtolower");
sayHello("Farel","sampleFullName");

?>