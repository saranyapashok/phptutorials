<?php
require_once __DIR__ . '/ParentProtected.php';
class DestructorClass {
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new DestructorClass("Apple");
print "abcd";
print $apple->name;

$protectobj = new ParentProtected();
 print $protectobj->protfunction();
 