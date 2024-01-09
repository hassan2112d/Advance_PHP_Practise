  
        <?php include 'partials/header.php';
          include 'partials/_dbconnect.php';
          include 'partials/_login.php';
          include 'partials/_signup.php'; 

          

          if(isset($_GET['login']) && $_GET['login']== "wrongemail"){

            echo "<script>alert('Invalid Credientials!')</script>";
          }
          if(isset($_GET['login']) && $_GET['login']== "wrongpassword"){

            echo "<script>alert('Wrong Password !')</script>";
          }
          if(isset($_GET['signup']) && $_GET['signup']== "true"){

            echo "<script>alert('Sign up successful! Please log in to continue')</script>";
          }
          if(isset($_GET['signupexists']) && $_GET['signupexists']== "true"){

            echo "<script>alert('Sign up Exists! Try another email to registered')</script>";
          }
          if(isset($_GET['signuppasswordmatch']) && $_GET['signuppasswordmatch']== "false"){

            echo "<script>alert('Confirm Password does not match!')</script>";
          }
        ?> 
         
         
        <?php include 'partials/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    