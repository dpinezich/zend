<?php


class Car
{


public $countTires = 4;

    public function __get( $propertyName ) {
        echo "The value of '$propertyName' was requested<br />";
        return "blue";
    }

    public function __set( $propertyName, $propertyValue ) {
        echo "The value of '$propertyName' : '$propertyValue' was set and is now available<br />";
        $this->$propertyName = $propertyValue;
    }
}
$car = new Car;

$x = $car->color; // Displays "The value of 'color' was requested"
$y = $car->countTires;
$car->price = 5000;


echo "The car's color is $x<br />"; // Displays "The car's color is blue"
echo "and the price is $car->price";
