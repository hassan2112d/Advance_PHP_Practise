<?php 

echo "Logout Session <br>";

session_start();
session_unset();
session_destroy();

echo "Logout Successfully";



?>