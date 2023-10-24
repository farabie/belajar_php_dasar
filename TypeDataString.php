<?php

echo 'String Single Quote: ';
//Single quote tidak bisa menggunakan \n(new line)
var_dump('Muhammad Farabie');
echo "String Double Quote: ";
var_dump("Muhammad Farabie");

echo "String New Line With Double Quote: \n";
var_dump("Muhammad Farabie \n");
echo "\n";
echo "double quote with tabe: d";
var_dump("Muhammad \t Farabie \t hahaha");

echo  <<< FARABIE
Ini adalah contoh implementasi string yang sangat panjang,
dengan Heredoc dengan lambang "<<<"
dan juga gak perlu ngetik ENTER secara manual,
"bisa quote" juga
FARABIE;

echo <<< 'ABIE'
ini adalah contoh string yang sangat panjang, dari
now doc ciri kahas nowdoc 'ABIE'(tanda petik dua)

ABIE;