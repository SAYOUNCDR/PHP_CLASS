<?php
$str = "Hello world!";
echo "Original String: $str\n";
echo "Length: " . strlen($str) . "\n";
echo "Reversed: " . strrev($str) . "\n";
echo "UpperCase: " . strtoupper($str) . "\n";
echo "LowerCase: " . strtolower($str) . "\n";

//Substring extraction
$substring  = substr($str, 7, 5);
echo "Substring (7,5): $substring \n";
//replaced
$replaced = str_replace("world!", "PHP", $str);
echo "Replaced string : $replaced \n";

//finding all numbers in string
$text = "Order 123, ID 456";
preg_match_all("/\d+/", $text, $matches);
echo "Numbers found: " . implode(", ", $matches[0]) . "\n";

//

