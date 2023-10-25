<?php

function sayHelloArgument($name)
{
    echo "Halo $name" . PHP_EOL;
}

sayHelloArgument("Farabie");
sayHelloArgument("Abie");

function defaultHello($name = "no name")
{
    echo "Helo $name" . PHP_EOL;
}

defaultHello();

//Kode kesalahan defaultargument
//Ini disebabkan karena yang kita isi itu firstname bukan sih lastname

// function kesalahanHello($firstName = "no name", $lastName)
// {
//     echo "Hallo kesalahan $firstName $lastName" . PHP_EOL;
// }

// kesalahanHello("Abie");

//Type Declaration
function haloDeclaration(string $firstName, string $lastName, int $age)
{
    echo "Halo dengan nama $firstName $lastName dengan umur $age" . PHP_EOL;
}

haloDeclaration("Muhammad" , "Farabie", 23);

function sum(int $angka1, int $angka2) {
    $total = $angka1 + $angka2;
    echo "Total $angka1 + $angka2 = $total" . PHP_EOL;
}

sum(10, 10);
//Error karena bukan type data int
// sum("100", "100");
// sum(true, false);
// sum([], []);

//Variable-length Argument List
//Variable-length argument list kemampuan untuk membuat bisa menerima banyak value
//dilambangkan dengan tanda ...(titik tiga kali)
function sumAll(...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }

    echo "Total " . implode(",", $values) . PHP_EOL;
}

sumAll(10, 10, 20, 30, 40);
//Ini untuk mengirim data nya yang berupa array
sumAll(...[10, 20, 30 , 40]);
?>