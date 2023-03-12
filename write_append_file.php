<?php

//" Writing(rewriting) in txt file"
echo "welcome to php";

// $a= fopen("file2.txt","w");

// fwrite($a,"HI MY NAME IS HASSSAN");

//Appanding(updating) in txt file

$a= fopen("file2.txt","a");

fwrite($a,"HI MY NAME IS HASSSAN");
?>