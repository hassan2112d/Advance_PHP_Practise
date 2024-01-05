<?php include 'partials/_dbconnect.php';
      include 'partials/header.php';
      include 'partials/_signup.php';
      include 'partials/_login.php';
      
?>
<?php
 

$id = $_GET['quesid'];

$sql = "SELECT * FROM `thread` WHERE thread_id = $id";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    $name = $row['thread_name'];
    $desc = $row['thread_desc'];
}

 $showalert = false;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $showalert = true;

   
    $content = $_POST['content'];
    $commentby = $_POST['sno'];

    $sql = "INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`,`comment_user_id`, `comment_time`) VALUES (NULL, '$content', $id, $commentby, current_timestamp())";

    $result = mysqli_query($conn,$sql);

  

    if($showalert){
        
        echo "<script>alert('Success! Your data registered Successfully;)</script>";
    }

  }
   
        
?>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4"><b>ISSUE:</b><?php echo $name; ?> Forum</h1>
        <p class="lead"><?php echo $desc; ?></p>
        <hr class="my-4">
        <p>(IMPORTANT) Guidelines for Forum Posts Participate in online forums as you would in constructive, face-to-face discussions.Postings should continue a conversation and provide avenues for additional continuous dialogue. Do not post “I agree,” or similar, statements.Stay on the topic of the thread – do not stray.</p>
        <p class="lead">
            <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
<?php 

   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
   {
    echo '
    <form action="'. $_SERVER['REQUEST_URI'].'" method="post">
        <h2>Post a Comment</h2>
       
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type a comment here:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
            <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
        </div>
        <button type="submit" class="btn btn-success">POST</button>
    </form>
    <div class="container" id="ques" >
         <h2 class="mt-4 mb-4 py-4 ">Comments</h2>
    ';
   }
   else{

    echo  '<p class="lead">To Post a Comment. Login First. </p>';
   }

?>
<?php 

  
  $id = $_GET['quesid'];
  //echo $id;
  $sql = "SELECT * FROM `comment` WHERE thread_id = $id";
  
  $result = mysqli_query($conn,$sql);
  $noresult = true;
  while($row = mysqli_fetch_assoc($result)){
    $noresult = false;
    $id = $row['comment_id'];
    $comment = $row['comment_content'];
    $comment_time = $row['comment_time'];
    $user_id = $row['comment_user_id'];
        
    $sql2 = "SELECT user_name FROM `user` WHERE user_id = $user_id ";
    $result2 = mysqli_query($conn,$sql2);
    $row = mysqli_fetch_assoc($result2);
   




    echo '<div class="media mb-4 my-4">
            <img class="mr-3" src="https://source.unsplash.com/500x400/?user,demoimage" width="70px" height="70px" alt="Generic placeholder image">
            <div class="media-body">
                <p class="font-weight-bold">'.$row['user_name'].' at '.$comment_time.')</p>
                <h5 class="mt-0">'.$comment.'</h5>
                
            </div>
        </div>';
        
 }
  

  if($noresult){
        echo  '<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">No Question</h1>
            <p class="lead">Be the first one to ask the questions</p>
        </div>
        </div>';
  }
  
?>
   

    </div>
</div>

<?php  include 'partials/footer.php'; ?>