<?php

echo "hello wolrd welcome to multi dimensional arrays <br>";

$multiarray = array(

    array(1,2,3,4,5),array(6,7,8,9,10),array(11,12,13,14,15)
);

echo $multiarray[0][4] .'<br>';

for ($multiarray=0; $multiarray < 20 ; $multiarray++) { 
    echo var_dump($multiarray); 
}
?>