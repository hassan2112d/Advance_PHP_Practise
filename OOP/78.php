<?php 


class student{

  public $name;
  public $class;
  public $student_id;

  function __construct($name,$class,$student_id){

    $this->name = $name;
    $this->class= $class;
    $this->student_id = $student_id;

    echo "$this->name  You are Welome to this class";
  }

}

$student1 = new student("Hassan",10,7633434); 

echo "<br> the id of the hassan is $student1->student_id"



?>