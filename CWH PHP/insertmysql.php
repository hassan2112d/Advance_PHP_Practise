<?php

////sql entry dta in database///////

$servername = "localhost";
$username = "root";
$password = "";
$database = "hello1";

$conn =mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{

   echo "Your connection not built".mysqli_connect_error();

}
else{

$name = "Hassan";
$email = "hassan2112d@aptechgdn";

$sql = " INSERT INTO `employee` (`s.no`, `name`, `email`) VALUES (NULL, '$name', '$email')";

$result = mysqli_query($conn,$sql);

if ($result == false){

   echo "Your data not submited successfully" .mysqli_error($conn);

}
else
{

   echo "Your data submited successfully";

}

}





?>