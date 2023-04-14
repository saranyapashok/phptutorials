<?php

class ParentProtected {
    protected $protectvar = "I am a Protected varuable";
    public function protfunction() {
        return "Hey";
    }
    public function __destruct() {
        echo "protected destructor";
    }
}

class deriveProtected extends ParentProtected {
    public function provar() {
        return $this->protfunction();
    }
}

$c = new deriveProtected();
print $c->provar();
