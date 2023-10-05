<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$database = "itheme";

$connect = mysqli_connect($servername,$username,$password,$database);

// Check connection
if(!$connect){
   
    die("error".mysqli_connect_error());
}



?>