<?php

class ParentPrivate {
    private $privatevar = 12345;

    public function privar() {
        return $this->privatevar;
    }
}
class derivePrivate extends ParentPrivate {
    public function privatevarderive() {
        return $this->privatevar;
    }
}
