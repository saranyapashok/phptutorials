<?php

class DeleteObject {
    public function hello() {
        echo "hello world";
    }
}

$obj = new DeleteObject();
$obj->hello();
unset($obj);
$obj->hello();
