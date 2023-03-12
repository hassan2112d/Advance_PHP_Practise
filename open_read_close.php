<?php


$f=fopen("file.txt","r");

//echo var_dump($f);

if(!$f){
    die("unable to connect");
}

$content=fread($f, filesize("file.txt"));
fclose($f);
echo $content;
?>