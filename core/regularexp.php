<?php

#preg_match


$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 

#preg_match_all

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

#preg_replace

$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

