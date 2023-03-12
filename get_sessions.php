<?php

session_start();
if(isset($_SESSION['name'])){
echo "welcome".$_SESSION['name'];
echo '<br>';
echo "your fav category is".$_SESSION['category'];
}
else{
    echo "please login to continue";
};

?>