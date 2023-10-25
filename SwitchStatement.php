<?php

$nilai = "D";

switch ($nilai) {
    case "A":
    case "a":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "b":
    case "C":
    case "c":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        break;
}

//Syntax alternatif switch
$nilaiOlahraga = "B";
switch ($nilaiOlarhgra):
    case "A":
        echo "Anda genius dalam olahraga" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda bagus dalam olahraga" . PHP_EOL;
        break;
    case "D":
        echo "Anda kurang pandai dalam olahraga" . PHP_EOL;
        break;
    default:
        echo "Anda salah jurusan" . PHP_EOL;
        break;
endswitch;



?>