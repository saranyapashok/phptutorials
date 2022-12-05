<?php
// Local scope for variables.

function test() {
    $x = 5;
    echo "X value is(inside):" . $x;
}
test();
echo "x value is(outside):" . $x;
