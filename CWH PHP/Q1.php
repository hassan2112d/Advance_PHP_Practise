<!-- Write a program toallow a driverto drive only  when his age is greater than 25 and less than 65?  -->

<?php

$a = 64;

$b = 91;


if($a>25 && $a<64)
{
    echo "You can drive a carr";
}
elseif($a==25)
{
    echo "You can drve aa car".$a;
}
elseif($a==64)
{
    echo "You can drve aa car".$a;
}
elseif($a<25)
{
   echo "You can not drive a car";
}
else{

    echo "You are not eligible you r so old";
}


?>