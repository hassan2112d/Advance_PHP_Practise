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

    return $this->id;
  }


}

$student1 = new student;
echo '<br>'.$student1->set_name("hassan").'';
echo '<br>'.$student1->student_id(5673).'';

$student2 = new student;
echo '<br>'.$student2->set_name("mujtuba").'';
echo '<br>'.$student2->student_id(9823).'';

$student3 = new student;
echo '<br>'.$student3->set_name("raza").'';
echo '<br>'.$student3->student_id(65738).'';


?>