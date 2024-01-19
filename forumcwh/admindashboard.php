<?php
ob_start(); 


include 'admindashboard/header.php';

if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    // User is logged in as an admin
    new alert();
    echo 'Welcome to Admin Dashboard ';
    echo 'Hello ! ' . $_SESSION['username'];

    include 'admindashboard/footer.php';
} else {
    // User is not logged in as an admin
    header("Location: /php/forumcwh/");
    exit();
}

ob_end_flush(); 

