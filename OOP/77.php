<?php 

echo "Lets start understanding OOPs class";



class student{
   
  public $name;
  public $class;

  public $id;
  

  function set_name($name){

    $this->name = $name;
    return $this->name;
    
  }

  function student_id($studentid){

    $this->id = $studentid;

    echo $this->id;
  }


}

$student1 = new student;
echo '<br>'.$student1->set_name("hassan").'';
$student1->student_id(76654);

$student2 = new student;
echo '<br>'.$student2->set_name("mujtuba").'';

$student3 = new student;
$hello = $student3->set_name("raza");
echo $hello;

?>