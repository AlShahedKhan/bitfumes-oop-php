<?php
// An abstract class in PHP is a class that contains at least one abstract method.
abstract class Car{
    // A concrete function within an abstract class.
    function getName(){
        return "It's a car";
    }
    // An abstract function within an abstract class.
    // It behaves like an interface, enforcing that any class that extends 
    // this abstract class must implement this method.
    abstract public function calculateTankArea();
}