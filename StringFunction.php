<?php

//Join untuk mengabungkan array
var_dump(join(",", [1,2,3,4,5]));
//Expload itu memecah string menjadi array
var_dump(explode(" ","Muhammad Farabie"));
//Mengubahnya menjadi lowercase
var_dump(strtolower("Muhammad Farabie"));
//Mengubahnya menjadi uppercase
var_dump(strtoupper("Muhammad Farabie"));
//Menghapus white space
var_dump(trim("    Muhammad Farabie      "));
//substr menghapus sebagian string
var_dump(substr("Muhammad Farabie", 4, 12));
//Untuk substring 0 itu awalnya 12 itu akhir karakternya selebihnya dihapus

?>