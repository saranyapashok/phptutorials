<?php
// Global scope for variables.

$x = 5;

function test() {
    global $x;
    echo "X value is(inside): " . $x;
}
test();
echo "X value is(outside): " . $x; 

// another way.

$y = 10;
function mytest() {
    echo "Y value is(inside):" . $GLOBALS['y'];
}
mytest();
echo "Y value is(outside):" . $y;
