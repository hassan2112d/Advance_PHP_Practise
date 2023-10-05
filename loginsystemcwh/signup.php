<?php 

$showalert = false;
$showerror = false ; 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
    include 'partials/db_connect.php';

    $username = $_POST["name"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    
    $exist = false;
    if($password == $cpassword && $exist == false)
    {
        $sql = "INSERT INTO `users` (`s.no`, `username`, `password`, `added_on`) VALUES (NULL, '$username' , '$password' , current_timestamp())";
        $result = mysqli_query($connect,$sql);

        if($result){
          
            $showalert = "Data Submited Successfully";

          
        }
      
    }
    else{

        $showerror = "Password Does not matched";
    }

}



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
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
        <h1 class=" text-center">Sign Up</h1>
       <form action="/php/loginsystemcwh/signup.php" method="post">
            <div class="form-group ">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group ">
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                <small id="emailHelp" class="form-text text-muted">Password and Confirm Password should be same.</small>

            </div>
          
            <button type="submit" class="btn btn-dark col-md-6 ">Submit</button>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>