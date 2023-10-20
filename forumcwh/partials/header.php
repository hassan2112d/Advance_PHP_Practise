<?php 

echo '

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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link d" href="contact.php">Contact</a>
    </li>
    </ul>
    <div class="conatiner">
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0 mr-4" type="submit">Search</button>
    <button class="btn btn-success my-2 my-sm-0 ml-4" type="button" data-toggle="modal" data-target="#loginModal" >Login</button>
    <button class="btn btn-success my-2 my-sm-0 ml-2" type="button" data-toggle="modal" data-target="#signModal" >Sign Up</button>
    

    </form>
    </div>
</div>
</nav>
';


include 'partials/_login.php';
include 'partials/_signup.php'; 


?>