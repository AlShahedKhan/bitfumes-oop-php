<?php
include 'car.php';
include 'bmw.php';

// You cannot create an instance of an abstract class. It must be inherited from another class.
// $car = new Car(); // This will throw an error.

// Create an instance of the RaceClass class, which extends the abstract Car class.
$bmw = new RaceCar();
echo $bmw->getName();