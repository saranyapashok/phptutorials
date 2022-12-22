<?php

$x = 10;
$y = 10;

# Arithmetic Operators.

$z = $x + $y;

print "Arithmetic:" . $z . "<br>";

#Assignment operator.

$x -= $y;

print "Assignment:" . $x . "<br>";

# Comparison operators.
# ==, ===, !=, <>(not equal to), !== (not equal or not same type), >, <, >=, <=, <=> (https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_spaceship) 

if (10 > 2) {
    print "comparison: true" . "<br>";
}

# Increment/Decrement Operator.
$x = 10;
$y = 11;
print "Pre increment:" . ++$x . "<br>";
print "Post increment:" . $y++ . "<br>";

#logical operator.
#and/&&, or/||, xor (any one should be ok, not both), ! (not true)

if (10<5 xor 5>2) {
    print "Logical operator:true" . "<br>";
}

#Array Operator.
# + (union) - https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_union
# == (equality) -  https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_equality
# === (Identity) - https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_identity
# != / <> (Inequality) - https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_inequality
# !== (non-identity) - https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_arr_non_identity

$x = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "green");
$z = ($x === $y);
print "Array operator". $z . "<br>";

#Conditional Assignment Operators
#Ternary
$u = "saranya";
// if empty($user) = FALSE, set $status = "logged in"
echo "Ternary" . $status = (empty($u)) ? "yes" : "no" . "<br>";

#null coalescing
// variable $color is "red" if $color does not exist or is null.
# $color not exists.
echo "coalecing" . $color = $color ?? "red" . "<br>";


//combine array. based on key value
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
print_r($c);
