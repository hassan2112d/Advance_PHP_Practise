<?php 

echo "Welcome to sessions <br>";

//What are Sessions?

//use for different browsing pages and are secure

session_start();

$_SESSION["username"] = "Hassan";
$_SESSION["password"] = "hiiii";

echo "Your Session is set";


?>