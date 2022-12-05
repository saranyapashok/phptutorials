<?php

// static keyword holds pervious data. Doesn't re-intialized.
function test() {
    static $x = 10;
    echo $x;
    $x++;
}
test();
test();
test();

