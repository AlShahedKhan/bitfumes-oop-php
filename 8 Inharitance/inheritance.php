<?php
// Simple structure of inheritance
class Parents{
}
class Child extends Parents{
    // child can have access and use all attributes and properties of parent class
}
class Fruits{
    public $name;
    public function setName($nameP){
        $this->name = $nameP;
    }
}
class Apple extends Fruits{    
}

class Mango extends Fruits{
    public function juice(){
        echo 'juice';
    }
}
$mango = new Mango();
$mango->setName('My Mango');
echo $mango->name;

// $apple = new Apple();
// $apple->setName('My Apple');
// echo $apple->name;
