<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];

    $existsql = "SELECT * FROM `user` where user_email = '$email'";
    $result = mysqli_query($conn,$existsql);
    $numrows = mysqli_num_rows($result);
    

    if($numrows>0){
        
        header("Location: /php/forumcwh/index.php?signupexists=true");
    }
    else{
        if($password == $cfpassword){
            $hash = password_hash($password,PASSWORD_DEFAULT);

            $sql ="INSERT INTO `user` (`user_name`,`user_email`, `user_password`, `added_on`) VALUES ('$name','$email', '$hash', current_timestamp())";
            $result =mysqli_query($conn,$sql);
            if($result){
                
                header("Location: /php/forumcwh/index.php?signup=true");
                exit;
                
            }
            
        }
        else{
             header("Location: /php/forumcwh/index.php?signuppasswordmatch=false");

        }
    }
}

?>