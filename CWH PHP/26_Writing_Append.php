<?php 


echo "Welcome to Writing and appending a file";

//Writing  In a File
// $a = fopen("file.txt","w");

// fwrite($a,"Hello my name is Hassan \n");
// fwrite($a,"I am a good boy");

// fclose($a);

//Appending in a file

$a = fopen("file.txt","a");

fwrite($a,"aPPENDING IN a file");

fclose($a);

?>