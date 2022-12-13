<?php
// php only support single inheritance.
// traits helps to supprot multiple inheritance.
trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
      }
}
    
class Welcome {
    use message1;
}
    
$obj = new Welcome();
$obj->msg1();
