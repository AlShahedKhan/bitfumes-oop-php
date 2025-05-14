<?php
class Student{
    // Properties 
    public $name;
    public $attendenct;
    public $totalMarks;

    public function StuDetails($nameGivenByUser, $attendenctGivenByUser, $totalMarksGivenByUser){
        // $this typically refers to the current object instance within a class
        $this->name = $nameGivenByUser; //$nameGivenByUser those are paramiter
        $this->attendenct = $attendenctGivenByUser;
        $this->totalMarks = $totalMarksGivenByUser;
    }
}

$class10 = new Student();
$class10->StuDetails('Shahed',true,99);

// Calling them my Properties name 
echo $class10->name;
echo $class10->attendenct;
echo $class10->totalMarks;

?>