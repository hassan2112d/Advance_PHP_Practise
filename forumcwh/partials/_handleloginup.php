<?php  

$showalert = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '_dbconnect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];
    
  $sql = "SELECT * FROM `user` WHERE user_email = '$email'";
  $result = mysqli_query($conn,$sql);

  $numrows = mysqli_num_rows($result);
 
  if($numrows == 1){

    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['user_password'])){
      
      session_start();
      $_SESSION['loggedin']= true;
      $_SESSION['useremail']= $email;
      
      header("Location: /php/forumcwh/index.php");
      exit();
    }
    else{
      header("Location: /php/forumcwh/index.php?login=wrongpassword");
    }
           
    
  }
  else{
    header("Location: /php/forumcwh/index.php?login=wrongemail ");
  }

  

}


?>