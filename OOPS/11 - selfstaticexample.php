<?php

class flowers {
    public function message() {
        return self::flower() . " looks amazing!!!";
    }

    public function flower() {
        return "Rose";
    }
}

class jasmine extends flowers {
    public function message() {
        return self::flower() . " looks amazing!!!";
    }
    public function flower() {
        return "Jasmine";
    }
}

class lotus extends flowers {
    public function flower() {
        return "Lotus";
    }
}

$jas = new jasmine();
print $jas->message();
$lot = new lotus();
print $lot->message();
$fol = new flowers();
print $fol->message();
