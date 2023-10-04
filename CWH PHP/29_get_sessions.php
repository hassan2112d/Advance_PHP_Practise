<?php 

echo "Get sessions <br>";


session_start();

if(isset($_SESSION["username"])){

echo "Welcome ".$_SESSION["username"]."";
echo "<br>";
echo "Welcome ".$_SESSION["password"];

}
else{

    echo "Please Set session";
}

?>