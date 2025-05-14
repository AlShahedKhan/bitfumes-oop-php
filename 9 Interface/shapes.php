<?php
// Interface is need to have same type nomenclature in the same code system
// Suppose you are working with a team and you have created some function and other team
// Member created same type of function with other name so there will be a conflict
include 'shapeInterface.php'; // and you must include interface file path
include 'geometryInterface.php';
class Triangle implements shapeInterface{ //when you say implements Interface than 
                                        // you have to implements all funciton in this class
    public function getArea(){
        echo 'Area of Triangle';
    }
}
class Rectangle implements shapeInterface,geometryInterface{
    public function getArea(){
        echo 'Area of Rectangle';
    }
    public function getCircumference($length, $width )
    {
        echo 2*($length+$width) ;
    }
}
$rec = new Rectangle();
$rec->getArea(); 
$rec->getCircumference(2,3); 
// interface just force you to have some functions in you class
// Think about interface as Skelton or Blueprint for your class which implements this inteface
