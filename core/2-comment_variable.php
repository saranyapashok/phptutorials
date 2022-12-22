<?php

// single line comment.

/**
 * Multiple line comment.
 */

$v = 10; // new variable initialized.

//variable - PHP is a loosely type language. because types are associated with values rather than variables.

$abc = 'Specbee';  //valid
$Abc = 'specbee.com'; //valid

//$9xyz = 'Hello world';  //invalid; starts with a number
$_xyz = 'Hello world';  //valid; starts with an underscore
$_9xyz = 'Hello world';  //valid


// Assign by reference.

// This means that the new variable simply points the original variable. Changes to the new variable affect the original, and vice a verse.


$foo='bob';
$bar=&$foo;
$bar="my $bar";
echo $bar;
echo '<br />';
echo $foo;
echo "<br>";

/**
 * Output
 * my bob
 * my bob
 */


 //PHP variables variables.

 $v='var1';
echo $v; // prints var1
$$v = 'var2'; 
echo $$v; // prints var2
echo $var1; // prints var2

?>
