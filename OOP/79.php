<?php 


class student3{

  public $name;
  public $class;
  public $student_id;

  //Constructor
  function __construct($name,$class,$student_id){

    $this->name = $name;
    $this->class= $class;
    $this->student_id = $student_id;

    echo "$this->name  You are Welome to this class";
  }

  //Destructor
  function __destruct(){

      echo "<br> Your admission is finished MR $this->name";
  }

}

$student1 = new student3("Hassan",10,7633434); 

echo "<br> the id of the hassan is $student1->student_id"



?>