<?php include 'partials/_dbconnect.php';
      include 'partials/header.php';
      include 'partials/_signup.php';
      include 'partials/_login.php';
      
?>
<?php

$id = $_GET['catid'];

$sql = "SELECT * FROM `category` WHERE category_id = $id";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    $categoryname = $row['category_name'];
    $categorydesc = $row['category_description'];
}

$method = $_SERVER['REQUEST_METHOD'];
$showalert = false;
if($method == "POST"){
    $showalert = true;
    $title = $_POST['title'];
    $title =  str_replace("<","&lt", $title);
    $title =  str_replace(">","&gt", $title);
    $desc = $_POST['desc'];
    $desc =  str_replace("<","&lt", $desc);
    $desc =  str_replace(">","&lt", $desc);
    $thread_user_id = $_POST['sno'];

     $sql= "INSERT INTO `thread` (`thread_name`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `added_on`)
     VALUES ('$title', '$desc', '$id', '$thread_user_id', current_timestamp())";

     $result = mysqli_query($conn,$sql);

     if($showalert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>SUCCESS !</strong> You Question submitted Successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
     }

}
?>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?php echo $categoryname; ?> Forum</h1>
        <p class="lead"><?php echo $categorydesc; ?></p>
        <hr class="my-4">
        <p>(IMPORTANT) Guidelines for Forum Posts Participate in online forums as you would in constructive, face-to-face discussions.Postings should continue a conversation and provide avenues for additional continuous dialogue. Do not post “I agree,” or similar, statements.Stay on the topic of the thread – do not stray.</p>
        <p class="lead">
            <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    echo '
    <div class="container">
        <h2 class="mt-4 mb-4 py-4 ">Start Disscussion:</h2>
        <form action="'. $_SERVER['REQUEST_URI'] .'" method="post">
            <div class="form-group">
                <label for="title">Problem Title:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Keep title in short.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Problem Description:</label>
                <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
            </div>
        
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';}

    else{

        echo '<p class="lead">To Start the Discussion. Login First. </p>';
    }
    ?>
    <div class="container" id="ques" >
         <h2 class="mt-4 mb-4 py-4 ">QUESTIONS :</h2>

<?php 

       $id = $_GET['catid'];
       $sql = "SELECT * FROM `thread` WHERE thread_cat_id = $id";
       $result = mysqli_query($conn,$sql);
       $noresult = true;
       while($row = mysqli_fetch_assoc($result)){
        $noresult = false;
        $id = $row['thread_id'];
        $name = $row['thread_name'];
        $desc = $row['thread_desc'];
        $user_id = $row['thread_user_id'];
        
        $sql2 = "SELECT user_name FROM `user` WHERE user_id = $user_id ";
        $result2 = mysqli_query($conn,$sql2);
        $row = mysqli_fetch_assoc($result2);
       
        echo '
        <div class="media mb-4 my-4">
            <img class="mr-3" src="https://source.unsplash.com/500x400/?user,defaultimage" width="70px" height="70px" alt="Generic placeholder image">
            <div class="media-body">
                <p class="font-weight-bold"> '.$row['user_name'] .'</p>
                <h5 class="mt-0" > <a class="text-dark" href="threadquestion.php?quesid='.$id.'"> Q :'.$name.'</a></h5>
                
            </div>
        </div>';
        
       }
       
       if($noresult){
        
         echo '<div class="jumbotron jumbotron-fluid">
         <div class="container">
           <h1 class="display-4">No Question</h1>
           <p class="lead">Be the first one to ask the questions</p>
         </div>
       </div>';
       }

 ?>


<!--     
    <div class="media mb-4">
        <img class="mr-3" src="https://source.unsplash.com/500x400/?user,human" width="70px" height="70px" alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="mt-0">Media heading</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div> -->
    </div>
</div>

<?php  include 'partials/footer.php'; ?>