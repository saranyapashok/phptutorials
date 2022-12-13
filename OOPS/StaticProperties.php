<?php

//object initialisation is not required.

class StaticProperties {

    public static $data = "Static method";

    public function print() {
        echo self::$data;
    }

}

class child extends StaticProperties {
    public function string() {
        return parent::$data;
    }
}

$obj = new StaticProperties();
$obj->print();
print StaticProperties::$data;
$obj1 = new child();
print $obj1->string();
print child::$data;

