<?php 

//Connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "codeix";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
   die("Connection Failed :". mysqli_connect_error());
}

?>