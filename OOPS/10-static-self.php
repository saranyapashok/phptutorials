<?php

class parents {

    public function parentClass() {
        return self::class;
    }
    public function new() {
        return static::class;
    }
}

class child extends parents {
    public function childClass() {
        return self::class;
    }

    public function newc() {
        return static::class;
    }
}

$o = new child();
print $o->childClass();
print $o->parentClass();
print $o->new();
print $o->newc();
