<?php






echo "What is inheritance?";

class banker1{
    public $name;
    private $salary;
    private $employee_id;

    protected function set($name,$salary,$employee_id){
        $this->name=$name;
        $this->salary=$salary;
        $this->employee_id=$employee_id;
        $this->get_name();
    }
    function get_name(){
        echo "<br>The emplyee name is $this->name id = $this->employee_id and salary is $this->salary";
    }

}

class hr1 extends banker1{
    private $role;

    function set_role($role){
        $this->role = $role;
        $this->set("Ali",30000,232324);
       
    }
    function get_role(){
        echo "<br>The role of the $this->name is $this->role";
    }
}

$employee = new banker1;
//$employee->set("hassan",20000,4582932);
//$employee->get_name();

$hr = new hr1;
$hr->set_role("Senior Manageer");
//$hr->set_role("Senior HR manager");
$hr->get_role();




?>