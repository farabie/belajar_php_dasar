<?php

//Anonymous function atau function tanpa nama biasa disebut juga closure
//Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

$sayHello = function (String $name) {
    echo "Hello ". $name . PHP_EOL;
};

$sayHello("Abie");
$sayHello("Farabie");

//Anonymous function sebagai argument
function sayGoodbye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye". $finalName . PHP_EOL;
}

sayGoodbye("Abie ", function (string $name) {
    return strtoupper($name);
});

//Mengakses variable di luar closure
//bisa mengguankan use untuk mengakses variable yang berada diluar closure
$firstName = "Abie";
$lastName = "Farabie";

$sayHelloAbie = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAbie();

?>