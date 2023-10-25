<?php

$counter = 0;


//Contoh penggunaan break
while(true) {
    echo "Hello Break Ke-" . $counter . PHP_EOL ;
    $counter++;

    if($counter > 2) { 
        break;
}
}

//Contoh penggunaan continue
for($i=0; $i <= 10; $i++) {
    if($i % 2 ==  1) {
        continue;
    }
    echo "Perulangan continue dengan bilangan genap ke-". $i . PHP_EOL ;
}

?>