<?php 

include 'admindashboard/header.php';


if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true){

    echo '<script>alert("You are logged in as admin");</script>';
    


}



include 'admindashboard/footer.php';

