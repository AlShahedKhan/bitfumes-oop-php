<?php
class User{
    public $name = 'Shahed';
    private $password = '123456';
    protected $email = 'abc@gmail.com';

    public function getPass(){
        return $this->password;
    }
}
class Admin extends User{
    function __construct()
    {
        echo $this->email;
    }
}
$user = new User();
echo $user->name;   // Public properties can be accessed anywhere, including outside 
                    //the class
// echo $user->password; //Cann't access private properties outside class
echo $user->getPass();  // Private properties can be accessed through public 
                        //methods within the class
// echo $user->email;   //Protected properties can be accessed within the class they 
                        //are declared and by classes that extend them                         
$admin = new Admin(); // Can access protected properties by extendeing 