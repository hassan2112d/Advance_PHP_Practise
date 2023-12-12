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

    <div class="container" id="ques" >
         <h2 class="mt-4 mb-4 py-4 ">QUESTIONS :</h2>

    <?php 

       $id = $_GET['catid'];
       $sql = "SELECT * FROM `thread` WHERE thread_cat_id = $id";
       $result = mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_assoc($result)){

        $id = $row['thread_id'];
        $name = $row['thread_name'];
        $desc = $row['thread_desc'];
       
        echo '
        <div class="media mb-4">
            <img class="mr-3" src="https://source.unsplash.com/500x400/?user,defaultimage" width="70px" height="70px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="threadid='.$id.'">'.$name.'</a></h5>
                '.$desc.'
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