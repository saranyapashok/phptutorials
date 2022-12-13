<?php

class ConstructorClass {
    public $a;
    protected $b;
    private $c;
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}

$obj = new ConstructorClass(1,2,3);
print $obj->a;
print $obj->b; // error.
print $obj->c; // error.

