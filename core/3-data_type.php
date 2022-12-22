<?php

// PHP supports string, integer, float, boolean, array, object, null.

$string = "Sample string";
$integer = 1234;
$float = 10.1;
$boolean = true;
$array = ["array1"];
$object = new stdClass();
$null = NULL;

echo "String: " . $string;
echo "Integer: " . $integer;
echo "float: " . $float;
echo "Boolean: " . $boolean;
print_r($array); // echo and works only on strings.
print_r($object);
echo "NULL: " . $null;

