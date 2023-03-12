<?php
//Reading file by line.
$f=fopen("file.txt","r");

//echo fgets($f);

// while ($a=fgets($f)) {
//     echo $a;
// }

// echo "end is here";

//Reading file by character.

// while($a=fgetc($f)){
//     echo $a;
// }

///"Writing a program using getc"//


while($a = fgetc($f)){

    echo $a;
    if ($a =='.') {
        break;
    }
}
fclose($f);
?>