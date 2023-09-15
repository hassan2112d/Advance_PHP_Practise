<?php

// echo 'require and include';

// differnece between include and require is that include is give warning and run the next item and require is neccessory it will give you fatal error

//require 'sqlconnect.php';
include 'sqlconnect.php';

$sql = "SELECT * FROM `employee`";
$result = mysqli_query($conn1,$sql);

$row = mysqli_num_rows($result);

echo "<br>$row";

while ($num = mysqli_fetch_assoc($result)) {
    
    echo '<br>hello'.$num['name'].'';
}

?>