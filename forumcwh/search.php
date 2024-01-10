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
  <style>
.container {
    min-height: 77vh;

}
  </style>

  <?php
    $noresult = true;
    $search =  $_GET['search']; 
    $sql = "SELECT * FROM `thread` WHERE MATCH (thread_name,thread_desc)against('$search')";
    $result = mysqli_query($conn,$sql);
    

    while($row = mysqli_fetch_assoc($result)){
     $noresult = false;
     $id = $row['thread_id'];
     $url = "threadquestion.php?quesid=".$id;
     
     echo '
      <div class="container my-4">
        <h1>Search Results for <em> "'.$search.'":</em></h1>
        <div class="result my-4">
            <h2><a href="'.$url.'" class="text-dark">'.$row['thread_name'].'</a></h2>
            <p>
            '.$row['thread_desc'].'
            .</p>
        </div>
       </div>';
    }

    if($noresult){
      echo '<div class="container mt-5">
              <div class="jumbotron text-center">
                  <h1 class="display-4">No Results</h1>
                  <p class="lead">Sorry, there are no results to display.</p>
                  <hr class="my-4">
                  <p class="mb-0">Please try a different search or filter criteria.</p>
              </div>
            </div>';

    }


        
    
  
 ?>
  <?php include 'partials/footer.php'; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->