<?php

//object initialisation is not required.

class StaticMethod {

    public static function data() {
        return "Static method";
    }

    public function print() {
        echo self::data();
    }

}

class child extends StaticMethod {
    public function string() {
        return parent::data();
    }
}

$obj = new StaticMethod();
$obj->print();
print StaticMethod::data();
$obj1 = new child();
print $obj1->string();
print child::data();

