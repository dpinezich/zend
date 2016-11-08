<?php
class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propQuadrat' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));
?>