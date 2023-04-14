<?php

// abstract method not defined
// abstract class should have atleast one abstract method
// abstract method should be defined on derived class

abstract class AbstractClassMethod {

    public $a = "hellloooo";

    abstract public function render();

    public function data() { //public or protected.
        return "hello world";
    }

}

class abschild extends AbstractClassMethod {

    public function render() {
        print parent::data();
    }

}


$obj = new abschild();
print $obj->render();
print $obj->a;
