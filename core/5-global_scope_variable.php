<?php
// Global scope for variables.

$x = 5;

function test() {
    echo "X value is(inside): " . $x;
}
test();
echo "X value is(outside): " . $x; 
