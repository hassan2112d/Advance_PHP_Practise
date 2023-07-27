<?php


echo "Associative array";


$favicon = array('red','green','blue','purple');

echo $favicon[0].'<br>';
echo $favicon[1].'<br>';
echo $favicon[2].'<br>';



$a = array('harray'=> 'red', 'hasssan' => 'blue' , 'hasnain' => 'purple' , 'mujtuba' => 'pink', 9 => 'wah');

echo $a['harray'].'<br><br><br>';


foreach ($a as $key => $value) {
    echo "The a of $key is $value <br> ";
}

?>