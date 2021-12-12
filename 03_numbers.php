<?php

// Declaring numbers
$a = 5;
$b = 9;
$c = 4.65;

// Arithmetic operations

echo $a + $b."<br>";
echo $c - $b."<br>";
echo $c * $a - $b."<br>";
echo $a * ($c - $b)."<br>";
echo $c % $b."<br>"; // remainder

// Assignment with math operators


// Increment operator
echo $a++."<br>";   //first value of "a" is printed, then  "a" is increased by 1
echo ++$a."<br>";    //first 1 is added to "a", the "a" is printed
// Decrement operator
echo $a--."<br>";
echo --$a."<br>";
// Number checking functions
is_float(1.56); //true
is_double(1.24); // true same as float
is_int(5); //true
is_numeric("3.254"); // true knows that the string is of numbers
is_numeric("kabelo"); //false
// Conversion
$strNumber = "325.654";
$number = (float)$strNumber;
var_dump(($number));
echo "<br>";
$numberInt = (int)$strNumber;
var_dump(($numberInt))."<br>"; //truncated to an interger
echo "<br>";
// Number functions

// Formatting numbers
$longNumber = 123456789.987654321;
echo number_format($longNumber, 3,","," ");
// https://www.php.net/manual/en/ref.math.php
