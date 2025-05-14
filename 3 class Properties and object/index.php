<?php
class Student{
    // Properties 
    public $name = 'Shahed';
    public $attendenct = true;
    public $totalMarks = 89;
}
// object of this class
// new Student();

// store object of this class in variable
$class10 = new Student();
echo $class10->name;
echo $class10->totalMarks = 99; //Re-assigne total marks out of the class

// We can re-use our Student class for class9
$class9 = new Student();
echo $class9->totalMarks;

// We can re-use our Student class for class8
$class9 = new Student();
echo $class9->totalMarks = 95;
?>