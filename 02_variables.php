<?php

// What is a variable
/* 
string
interger
float/double
boolean
null
array
object
resource
*/
 
// Variable types
$name = "Kabelo"; //string
$age = 33; //integer
$isMale = true; //boolean
$height = 1.63; //float
$salary = null; //null

// Declare variables

// Print the variables. Explain what is concatenation
echo $name."<br>";
echo $age."<br>";
echo $isMale."<br>";
echo $height."<br>";
echo $salary."<br>";

// Print types of the variables
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isMale)."<br>";
echo gettype($height)."<br>";
echo gettype($salary)."<br>";

// Print the whole variable
var_dump($name)."<br>";
var_dump($age)."<br>";
var_dump($isMale)."<br>";
var_dump($height)."<br>";
var_dump($salary)."<br>";

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name)."<br>";

// Variable checking functions

// Check if variable is defined

echo isset($name)."<br>";
echo isset($kabelo)."<br>";

// Constants

define("kabelo", "he is the sexiest man alive");
echo kabelo."<br>";

// Using PHP built-in constants
