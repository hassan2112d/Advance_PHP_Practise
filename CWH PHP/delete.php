<?php

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

$sql = "DELETE FROM `employee` WHERE `employee`.`name` = 'Hassan' LIMIT 8";

$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo $aff.'<br>';

if ($result == false){

   echo "Your data not submited successfully" .mysqli_error($conn);
}
else
{
   echo "Your data submited successfully";
}
}





?>