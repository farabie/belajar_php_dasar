<?php

goto a;
//goto itu berfungsi untuk loncat ke kode program sesuai dengan keinginan kita
echo "Hello A". PHP_EOL;

a:
echo "Hello A". PHP_EOL;

//Goto operator di loop

$counter = 1;
while(true) {
    echo "While Loop ke" . $counter .PHP_EOL;
    $counter ++;
    if($counter > 10) {
        goto end;
    } 
}

end:
echo "End Loop";