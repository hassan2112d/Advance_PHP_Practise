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

    <div class="container" id="ques" >
         <h2 class="mt-4 mb-4 py-4 ">Comments</h2>

   

    </div>
</div>

<?php  include 'partials/footer.php'; ?>