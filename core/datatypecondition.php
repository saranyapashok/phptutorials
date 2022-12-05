<?php

$a = 1;

echo "IS Integer: " . is_int($a) . "<br>";

$b = "abcd";

echo "Is String: " . is_string($b) . "<br>";

$c = [];

echo "Is Array: " . is_array($c) . "<br>";

$d = true;

echo "Is boolean: " . is_bool($d) . "<br>";

$e = 1.0;

echo "Is float: " . is_float($e) . "<br>";

$f = new stdClass();

echo "Is Object: " . is_object($f) . "<br>";

$g = NULL;

echo "Is null: " . is_null($g) . "<br>";
