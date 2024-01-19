    <?php 
    session_start();
    echo '
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

        <title>Codeix - Coding Platform</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/php/forumcwh">CODEIX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
        <li class="nav-item ml-4">
            <a class="nav-link" href="/php/forumcwh">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

    include 'partials/_dbconnect.php';    
    $sql = "SELECT category_name,category_id FROM `category`";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
      echo '  
            <a class="dropdown-item" href="threadlist.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a>';
            
       
    }

      echo '
        </li>
        <li class="nav-item">
            <a class="nav-link d" href="contact.php">Contact</a>
        </li>
        </ul>
        <div class="conatiner">
        <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0 mr-4" type="submit">Search</button>';

        
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
      
        echo '<p class="text-light my-0">HELLO! '.$_SESSION['useremail'].' </p>
        <a href="/php/forumcwh/partials/_logout.php" class="btn btn-success my-2 my-sm-0 ml-4" type="button"  >LOGOUT</a>';
        }
        
        else{
    
        echo ' <button class="btn btn-success my-2 my-sm-0 ml-4" type="button" data-toggle="modal" data-target="#loginModal" >Login</button>
        <button class="btn btn-success my-2 my-sm-0 ml-2" type="button" data-toggle="modal" data-target="#signModal" >Sign Up</button>';
        }
        

    echo ' </form>
        </div>
    </div>  
    </nav>
    ';




    ?>