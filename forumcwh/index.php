  
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
          <!-- slider -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://source.unsplash.com/2400x900/?code,python" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/2400x900/?coding,java" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://source.unsplash.com/2400x900/?programming,javascript" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          <!-- slider -->

          <div class="container mt-4" id="ques">
            <h2 class="text-center">CODEIX -- Coding Platform</h2>
            <div class="row">
          <!-- FETCH -->
  <?php 

           $sql = "SELECT * FROM `category`";
           $result = mysqli_query($conn,$sql);

           while($row = mysqli_fetch_assoc($result)){

            $name = $row['category_name'];
            $description = $row['category_description'];
            $id = $row['category_id'];

            echo '<div class="col-md-4 my-2">
                <div class="card my-2" style="width: 18rem;">
                  <img class="card-img-top" src="https://source.unsplash.com/500x400/?code,'.$name.'" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a class="text-dark" href="threadlist.php?catid='.$id.'">'.$name.'</a></h5>
                        <p class="card-text">'.substr($description,0,40).'.....</p>
                        <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View</a>
                    </div>
                </div>
              </div>';

           }

  ?>
          <!-- LOOP -->
          <!-- CARD -->
              
            </div>
          </div>
        <?php include 'partials/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    