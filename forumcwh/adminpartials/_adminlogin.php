<?php 

include '../partials/_dbconnect.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){


$name = $_POST['username'];

$userpassword = $_POST['password'];     
$sql = "SELECT * FROM `admin`";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);



if($name == $data['username']){
    if($userpassword == password_verify($userpassword,$data['admin_password'])){
           
          $name = $data['username'];
           session_start();
           $_SESSION['adminloggedin'] = true;
           $_SESSION['username'] = $name;
           header("Location: /php/forumcwh/admindashboard.php");
           exit();
           
    }
    else{
        echo '<script>alert("Wrong Password. You have three more chances.");</script>';
    }
}
else{
    echo '<script>alert("Wrong Username . You have three more chances.");</script>';
}





// echo $name ;
// echo $userpassword ;
};



