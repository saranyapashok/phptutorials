<?php

// static keyword holds pervious data. Doesn't re-intialized.
//Normally when a function terminates, all of its variables loose its values. Sometimes we want  to  hold these values for the further job. Generally, those variables which hold the values are called static variables inside a function. To do this we must write the keyword "static" in front of  those  variables. Consider the following example without a static variable. 

function test() {
    static $x = 10; // won't reinitialize.
    echo $x;
    $x++;
}
test(); //10
test(); //11
test(); //12

