<?php
class Bill{
    public $dinner = 20;
    public $desserts = 5;
    public $coldDrinks = 3;
    public $bill;

    public function dinner($person){
        $this->bill += $this->dinner * $person;
        return $this;
    }
    public function dessert($person){
        $this->bill += $this->desserts * $person;
        return $this;
    }
    public function coldDrinks($person){
        $this->bill += $this->coldDrinks * $person;
        return $this;
    }     
}

$bill = new Bill();
// Methode chainning
echo $bill->dinner(2)->dessert(1)->coldDrinks(2)->bill;