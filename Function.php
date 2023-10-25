<?php 


//Function adalah block kode program yang akan berjalan saat kita panggil
function sayHello() {
    echo "Hello Function" . PHP_EOL;
}

sayHello();	

//Lokasi function itu flexible bisa diubah didalam if ataupun dilainnya
//Jadi kita bisa membuat function dimana saja termasuk juga di dalam if sekalipun
$create = true;
if($create){
    function hi() {
        echo "Hi Function". PHP_EOL;
    }
}


hi();
?>