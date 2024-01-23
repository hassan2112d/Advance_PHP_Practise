<?php
ob_start(); 

include '../partials/_dbconnect.php';
include '../admindashboard/header.php';

$sql = "SELECT * from `admin`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    // User is logged in as an admin
    new alert();
    echo ' 
          
            <div class="jumbotron ">
             <h3 class="display-4">Welcome Admin '.$_SESSION['username'].'</h3>
                
             <p class="h5">Codeix is a cutting-edge coding platform designed for both novice programmers and seasoned developers. </p>                
               
            </div>
            <div class="container mt-4">
            <div class="row">
            <div class="col-8">
            <!-- Profile Card -->
            <div class="card text-center">
            
            
                <div class="card-body text-center">
                    <h5 class="card-title">'.$row['admin_username'].'</h5>
                    <p class="card-text">Email: '.$row['admin_email'].'</p>
                    <a href="../Dashboard/setting.php" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
        
    </div>
</div>' ;

    include '../admindashboard/footer.php';
}
  else {
     // User is not logged in as an admin
     header("Location: /php/forumcwh/");
     exit();
}

ob_end_flush(); 

