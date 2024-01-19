<?php 

include '../partials/_dbconnect.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST'){


$name = $_POST['username'];

$userpassword = $_POST['password'];     
$sql = "SELECT * FROM `admin`";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);

$showalert = false;

if($name == $data['username']){
    if($userpassword == password_verify($userpassword,$data['admin_password'])){
           echo '<script>alert("You are logged in as admin");</script>';
           header("Location: /php/forumcwh/index.php");
           exit();
           
    }
    else{
        echo 'your password is wrong';
    }
}
else{
    echo ' Your username is wrong';
}





// echo $name ;
// echo $userpassword ;
};



