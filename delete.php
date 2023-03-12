<?php

$servername="localhost";
$username="root";
$password="";
$database="contacts";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    die("SOrry for unsucessful:" .mysqli_connect_error());
}
else{

    echo"you are sucessful";
}

$sqli="DELETE FROM `contact us` WHERE `contact us`.`name` =  'Vikrant' Limit 5";
$result=mysqli_query($conn,$sqli);

$aff=mysqli_affected_rows($conn);

echo "<br>.the affected rows are ".$aff;
?>