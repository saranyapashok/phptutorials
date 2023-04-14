<?php
//no properties
//Classes can implement an interface while inheriting from another class at the same time
// one or more class implements same interface is "polymorphism".
// contains only public methods
// all methods are abstract
// it doesnt contains definition

interface InterfaceCustom {
    public function makeSound();
    public function makeSound2(); // throws error. All methods are abstract.
}

class Sound implements InterfaceCustom {
    public function makeSound() {
      echo "Meow";
    }
    public function makeSound2() {
      echo "hey";
    }
}

$InterfaceCustom = new Sound();
$InterfaceCustom->makeSound();
