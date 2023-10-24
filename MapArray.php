<?php
//MAP
$names = array(
    "id" => "1",
    "name" => "Muhammad Farabie",
    "age" => 23
);

var_dump($names);

//Map
$Student = array("name" => "names_student", "address" => "Perumahan Griya Mentari No 41", );
var_dump($Student);

//Array Dalam Array
$Pegawai = [
    "name" => "Muhammad Farabie",
    "age" => 23,
    "address" => "Perumahan Griya Mentari",
    "Hoby" => [
        "Olahraga" => "Badminton",
        "Study" => "Matematika,"
    ]
    ];

var_dump($Pegawai);

    ?>