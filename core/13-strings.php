<?php

$string = "Hello World";

echo "Strlen: " . strlen($string) . "<br>";
echo "String word count: " . str_word_count($string) . "<br>";
echo "String Reverse: " . strrev($string) . "<br>";
echo "String Position: " . strpos($string, "world") . "<br>";
echo "String Replace: " . str_replace("World", "Students", $string) . "<br>";
echo "String Repeat: " . str_repeat($string, 3) . "<br>";
echo "String Split: " . "<br>";
print_r(str_split($string));
//substr($s,0, 2)
$uc = "hello world";
echo "<br>Upper case first letter from each word: " . ucwords($uc) . "<br>";
echo "Upper case first letter: " . ucfirst($uc) . "<br>";
