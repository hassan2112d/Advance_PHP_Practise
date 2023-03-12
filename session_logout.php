<?php

session_start();
session_unset();
session_destroy();
echo "hi".$_SESSION['name'];
echo "<br>";
echo "your category is".$_SESSION['category'];
echo "<br>";
echo "you have been logout";


?>