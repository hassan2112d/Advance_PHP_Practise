<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = "Vikrant";
$email = "sg27408@gmail.com";
$desc = "i am a good person";

// Sql query to be executed
$sql = "INSERT INTO `contact us` ( `name`, `email`, `concern`, `date`) VALUES ( '$name', '$email', '$desc', CURRENT_TIMESTAMP)";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>
