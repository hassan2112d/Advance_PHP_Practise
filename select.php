<?php




$servername="localhost";
$username="root";
$password="";
$database="demo";


$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    die("Sorry you are unsucessful:".mysqli_connect_error());
}


$sqli="SELECT * FROM `practise`";

$result=mysqli_query($conn,$sqli);

//"for counting rouws and column in sql"

$num=mysqli_num_rows($result);
echo "<br>";
echo $num ."rows are in the database". "<br>";
if($num>0){
while ($row=mysqli_fetch_assoc($result)){
    
    echo $row['name'] ."<br>".  ". Hello ". $row['email'] ."<br>"." Welcome to ". $row['pass']."<br>" ."description".$row['description']."<br>";

    }


}
