<?php
const EINS = 1;
const ZWEI = EINS * 2;

class C {
    const DREI = ZWEI + 1;
    const EIN_DRITTEL = EINS / self::DREI;
    const SATZ = 'Der Wert von DREI ist '.self::DREI;

    public function f($a = EINS + self::DREI) {
        return $a;
    }
}

echo (new C)->f()."\n";
echo C::SATZ;
?>