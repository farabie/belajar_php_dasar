<?php

//Callback berfungsi untuk memanggil function lainnya sesuai
//dengan argument yang telah diberikan
//Bisa menggunakan function call_user_func(callable, arguments)

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Abie", function ($name) {return strtoupper($name);});
sayHello("Abie",  fn ($name) => strtoupper($name));
sayHello("Abie", "strtoupper");
sayHello("Abie", "strtolower");

?>