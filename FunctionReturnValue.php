<?php

function sum(int $angka1, int $angka2)
{
    return $angka1 + $angka2;
}


$total = sum(10, 20);
var_dump($total);

$total = sum(30, 20);
var_dump($total);

function getFinalValue(int $angka3)
{
    if ($angka3 >= 90):
        return "nilai anda A";
    elseif ($angka3 >= 80):
        return "Nilai anda B";
    elseif ($angka3 >= 70):
        return "Nilai anda C";
    elseif ($angka3 >= 60):
        return "Nilai anda D";
    else:
        return "E";
    endif;
}

$getvalue = getFinalValue(70);
var_dump($getvalue);

//Return Type Declaration
function sum2(int $angka1, int $angka2) : int
{
    return $angka1 + $angka2;
}

function getFinalValue2(int $angka3) : string
{
    if ($angka3 >= 90):
        return "nilai anda A";
    elseif ($angka3 >= 80):
        return "Nilai anda B";
    elseif ($angka3 >= 70):
        return "Nilai anda C";
    elseif ($angka3 >= 60):
        return "Nilai anda D";
    else:
        return "E";
    endif;
}

echo "Sum dengan declaration return: ". PHP_EOL;
var_dump(sum2(10,20));

echo "Get final value declaration return: ". PHP_EOL;
var_dump(getFinalValue2(92));

?>