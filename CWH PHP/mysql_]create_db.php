<?php

//connection to mysqli
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
{
    echo 'error occured' .mysqli_connect_error();
}
else{

    //sql database qurey to insert database
$sql = "CREATE DATABASE hello1";

$result = mysqli_query($conn,$sql);

//CHECK

if(!$result)
{
    echo 'error occured'.mysqli_connect_error();
}
else
{
    echo "created";
}


}


?>