<?php 

//Type Data Number
echo "Decimal: ";
var_dump(1234);
echo "Octal: ";
var_dump(0123);
echo "Hexadecimal: ";
var_dump(0x1A);
echo "Binary: ";
var_dump(0b11111111);
echo ("Underscore di Number: ");
var_dump("1_200_756");

echo "--------------------";


//Tipe Data Floating Number
echo "\nFloating Point: ";
var_dump(1.234);
echo "Floating Point dengn E notation plus";
var_dump(1.2e3);
echo "Floating Point dengan E notation minus";
var_dump(7e-3);
echo "Underscore di floating";
var_dump(10.76_3);
printf("===================");

//Kode Integer Overflow
echo "\nInteger Overflow 32 Bit: ";
var_dump(21474836648);
echo "Integer Overflow 64 Bit: ";
var_dump(9223372036854775808);
?>