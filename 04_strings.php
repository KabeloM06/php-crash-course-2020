<?php

// Create simple string
$name = "Kabelo";
$string = 'Hello I am '.$name.'. I am 33'; // single quotation takes more to concatinate
$string2 = "Hello I am $name. I am 33";

echo $string."<br>";
echo $string2."<br>";

// String concatenation

// String functions 
$string = "      Hello World       ";

echo "1 - ". strlen($string) . "<br>";
echo "2 - ". trim($string) . "<br>";
echo "3 - ". ltrim($string) . "<br>";
echo "4 - ". rtrim($string) . "<br>";
echo "5 - ". str_word_count($string) . "<br>";
echo "6 - ". strrev($string) . "<br>";
echo "7 - ". strtoupper($string) . "<br>";
echo "8 - ". strtolower($string) . "<br>";
echo "9 - ". ucfirst($string) . "<br>";
echo "10 - ". lcfirst($string) . "<br>"; // first letter into lower case
echo "11 - ". ucwords("hello world and php") . "<br>"; //all first letters of words into upper case
echo "12 - ". strpos($string, "World") . "<br>"; //position of string. all same case
echo "13 - ". stripos($string, "world") . "<br>"; // position of string, but ignores cases
echo "14 - ". substr($string, 8, 4) . "<br>"; // sub string. takes out part of the string up to position specified
echo "15 - ". str_replace("World", "PHP", $string) . "<br>"; // replaces the selected string. Case sensitive
echo "16 - ". str_ireplace("world", "PHP", $string) . "<br>"; // ignores the case


// Multiline text and line breaks
$longText = "
    Hello, my name is Kabelo
    I am 33,
    I love my family
";

echo $longText."<br>";

echo nl2br($longText)."<br>"; //nl2br creates a br tag whenever it finds a new line

// Multiline text and reserve html tags
$longText = "
    Hello, my name is <b> Kabelo</b>
    I am <b>33</b>,
    I love my family
";
echo $longText."<br>";
echo nl2br($longText)."<br>";
echo htmlentities($longText)."<br>"; //shows the code tags
echo nl2br(htmlentities($longText))."<br>";
echo html_entity_decode(("&lt;b&gt;Zura&lt;/b&gt;"))."<br>"; // decodes php code/entities from browser
// https://www.php.net/manual/en/ref.strings.php