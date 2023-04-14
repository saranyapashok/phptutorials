<?php

require_once __DIR__ . '/ParentProtected.php';

require_once __DIR__ . '/ParentPrivate.php';

class abc {
  public $var;

  public function printhw($txt) {
    return $this->var . $txt;
  }
}

//Basic

$obj = new abc();
$obj->var = "hello";
print $obj->printhw(" world");
// var_dump($obj);

// Protected.
// $protectobj = new ParentProtected();
// print $protectobj->protfunction();
// print $protectobj->protectvar; // error.

// $deriveprot = new deriveProtected();
// print $deriveprot->provar();

// //Private
// $privateobj = new ParentPrivate();
// print $privateobj->privar();
// print $privateobj->privatevar; // error

// $deriveprivateobj = new derivePrivate();
// print $deriveprivateobj->privatevarderive();


