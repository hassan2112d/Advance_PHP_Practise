<?php

echo "Creating tables in my sqll";

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php';

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo 'you are not connected to database'.mysqli_connect_error();
}
else{

    echo '<br> You are connected successfully';
}


$sql = 'CREATE TABLE `prac1` (`s.no` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`s.no`)) ENGINE = InnoDB';

$result = mysqli_query($conn,$sql);

if(!$result){

    echo 'You table is not created successfully'.mysqli_connect_error();
}
else{

    echo 'Your table created successfully';
}
?>