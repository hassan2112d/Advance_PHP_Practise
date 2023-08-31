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
   
$sql = "SELECT * FROM `employee` ";
$result = mysqli_query($conn,$sql);

$row = mysqli_num_rows($result);

echo $row."<br>";
$num = 1;
if($row>0)
{

  while( $hello = mysqli_fetch_assoc($result))
  {
     echo $num. "Hello".$hello['name']."   your email is    ".$hello['email']."<br>";
     $num = $num+1;

  }
}

$sqli = "UPDATE `employee` SET `email` = 'h@gmail.com' WHERE `employee`.`s.no` = 10;";
$result2 = mysqli_query($conn,$sqli);


$hii = mysqli_affected_rows($conn);

echo "Affected rows :".$hii;


if($result){

    echo "Done Successfully";
}
else{
    echo"Not Done";
}

}

?>