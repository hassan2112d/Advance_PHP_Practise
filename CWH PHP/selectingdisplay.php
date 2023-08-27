<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'hello1';

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
die("Connection failed: ".mysqli_connect_error($conn));

}
else{ 
    echo "Connected successfully";
}

$sql = "SELECT * FROM `employee`";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

echo $num;

if($num>0)
{
while( $row = mysqli_fetch_assoc($result)){
   
    echo var_dump($row);
    echo "<br>";
}

}
?>