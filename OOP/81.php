<?php


echo "What is inheritance?";

class banker{
    public $name;
    private $salary;
    private $employee_id;

    function set($name,$salary,$employee_id){
        $this->name=$name;
        $this->salary=$salary;
        $this->employee_id=$employee_id;
    }
    function get_name(){
        echo "<br>The emplyee name is $this->name id = $this->employee_id and salary is $this->salary";
    }

}

class hr extends banker{
    public $role;

    function set_role($role){
        $this->role = $role;
    }
    function get_role(){
        echo "<br>The role of the $this->name is $this->role";
    }
}

$employee = new banker;
$employee->set("hassan",20000,4582932);
$employee->get_name();

$hr = new hr;
$hr->set("Ali",40000,56732);
$hr->set_role("Senior HR manager");
$hr->get_role();


?>