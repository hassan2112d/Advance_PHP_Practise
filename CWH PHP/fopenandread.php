<?php  

$a = fopen("builtin.txt","r");

$b = fread($a,filesize("builtin.txt"));

if(!$b)
{
    echo "Unable to processs";
}

echo $b;

fclose($a);





?>