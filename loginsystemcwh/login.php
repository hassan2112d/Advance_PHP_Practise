<?php 

$showalert = false;
$showerror = false ; 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
    include 'partials/db_connect.php';

    $username = $_POST["name"];
    $password = $_POST["password"];
    
    
    $login = false;
        $sql = "SELECT * from users WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($connect,$sql);
        $num = mysqli_num_rows($result);

        if($num){
          
            $login = True;
            $showalert = "Successfully. You are Logged in. ";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");

          
        }
      
    
          else{

              $showerror = "Invalid Creditionals";
          }

}



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php  require 'partials/_nav.php';    ?>

      <?php 

      if($showalert){

        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> '.$showalert.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>';}
       if($showerror){

        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> '.$showerror.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>';}
     ?>
      <div class="container mt-4 ">
        <h1 class=" text-center">Log in</h1>
       <form action="/php/loginsystemcwh/login.php" method="post">
            <div class="form-group ">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-dark  ">Login</button>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>