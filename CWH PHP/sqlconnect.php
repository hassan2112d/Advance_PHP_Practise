<?php

echo 'welcome to connection of mysql with php';

// Two ways to connect databse
//1. Mysqli (procedure, OOP)
//2.PDO

//Procedure

$servername = "localhost";
$username = "root";
$password = "";
$database = "hello1";


$conn1 = mysqli_connect($servername,$username,$password,$database);

if(!$conn1)
{
    echo "sorry you are not connected ".mysqli_connect_error();
}
else{


   echo "<br> you are connected successfully";

}

?>