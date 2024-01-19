<?php

class student1{

    //properties can be. It is necessary to give the any propertie before variable it cannot pic public by default.

    //public -- access from anywhere
    //private  -- only be access by in class
    //protected -- access in class or derivved from the classs

    // fucntion can be private and public and definition will be apply same one above. you dont need to give
    //public it can take it auto.

    public $name = "hassan";
    private $class= 9;

    function echo_name(){

        echo $this->name;
    }

    function echo_class(){

        echo $this->class;
    }


    

}

$harry = new student1;
echo $harry->name;
echo $harry->class;


?>