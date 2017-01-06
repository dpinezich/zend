<?php

echo "normal version<br />";

class A {
    static $word = "hello";
    static function hello() {print self::$word;}
}
class B extends A {
    static $word = "bye";
}
B::hello();



echo "<br /><br />late static version<br />";

class C {
static $w = "hello";
static function hello() {print static::$w;}
}
class D extends C {
static $w = "bye";
}
D::hello();


?>