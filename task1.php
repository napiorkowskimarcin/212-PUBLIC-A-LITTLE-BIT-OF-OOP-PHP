<?php

/**
 * Implement following functionality
 * .
 * Vehicle should work as follows:
 * * Vehicle cannot accelerate if engine is stopped. System should inform that it is impossible.
 * * All types of vehicles have max speed limits:
 * ** Car = 140,
 * ** Motorcycle = 200,
 * ** Tractor = 45.
 * Speed of a vehicle cannot be below 0. 
 * If speed of a vehicle is 0 then the engine should stop.
 * 
 * 
 * Base architecture has been provided. Try to use it.
 * Use following script to test your solution.
 */
// Notes: started can be a private class, to check abstract classes;

require_once 'classes/Car.php';
require_once 'classes/Motorcycle.php';
require_once 'classes/Tractor.php';

function logTask1($str){
    echo "$str<br>";
}

$car1 = new Car('Ford', 'red', 'sedan', 2010);
$car2 = new Car('Audi', 'blue', 'hatchback', 2017);
$moto = new Motorcycle('Thunderbolt', 2010);
$tractor = new Tractor('Ursus', 75, 1982);

logTask1($car1->startEngine());

logTask1($car1->accelerate(20));
logTask1("Current speed of ".$car1->getName()." is ". $car1->getSpeed());
logTask1($car1->accelerate(50));
logTask1("Current speed of ".$car1->getName()." is ". $car1->getSpeed());
logTask1($car1->slow(30));
logTask1("Current speed of ".$car1->getName()." is ". $car1->getSpeed());
logTask1($car1->accelerate(1000));
logTask1("Current speed of ".$car1->getName()." is ". $car1->getSpeed());


logTask1($car2->accelerate(5));
logTask1("Current speed of " . $car2->getName() . " is " . $car2->getSpeed());
logTask1($car2->startEngine());
logTask1($car2->accelerate(17));
logTask1("Current speed of " . $car2->getName() . " is " . $car2->getSpeed());
logTask1($car2->slow(40));
logTask1("Current speed of " . $car2->getName() . " is " . $car2->getSpeed());
logTask1($car2->accelerate(30));
logTask1("Current speed of " . $car2->getName() . " is " . $car2->getSpeed());

logTask1($moto->startEngine());
logTask1($moto->accelerate(5));
logTask1("Current speed of " . $moto->getName() . " is " . $moto->getSpeed());
logTask1($moto->accelerate(200));
logTask1("Current speed of " . $moto->getName() . " is " . $moto->getSpeed());

logTask1($tractor->startEngine());
logTask1($tractor->accelerate(5));
logTask1("Current speed of " . $tractor->getName() . " is " . $tractor->getSpeed());
logTask1($tractor->stopEngine());
logTask1($tractor->accelerate(99));
logTask1("Current speed of " . $tractor->getName() . " is " . $tractor->getSpeed());

