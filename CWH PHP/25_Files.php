<!-- fgets() is used to print 1 line from files -->
<!-- fgetc() is used to print 1 files by character by character -->


<?php 

$a = fopen("builtin.txt","r");

// echo fgets($a);
// echo fgets($a);
// echo fgets($a);

// while($b = fgets($a)){
//     echo $b;
    
// }



while($c = fgetc($a)){
    echo "$c";
    if($c == "."){
        break;
    }
}

fclose($a);
?>