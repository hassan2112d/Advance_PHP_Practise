<?php 

include '../admindashboard/header.php';
include '../partials/_dbconnect.php';

if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    // User is logged in as an admin

    $sql = "SELECT * FROM `admin`";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <h3>Admin Credentials </h3>
        <form class="my-4" method="post" action="settingupload.php?admin_id='.$row['admin_id'].'" enctype="multipart/form-data">
            <div class="form-group row my-2">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username :</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" name="username" value="' . $row['admin_username'] . '">
                </div>
            </div>
            <div class="form-group row my-2">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="' . $row['admin_email'] . '">
                </div>
            </div>
            <div class="form-group row my-2">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="********">
                </div>
            </div>
            <div class="form-group row my-2">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Current Profile Image:</label>
                <div class="col-sm-10">
                    <img src="' . $row['admin_image'] . '" alt="Current Profile Image" style="max-width: 100px;">
                </div>
            </div>
            <div class="form-group row my-2">
                <label for="inputPassword3" class="col-sm-2 col-form-label">New Profile Image:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="inputPassword3">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 my-4">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
        </form>';
    }

    include '../admindashboard/footer.php';
} else {
    // User is not logged in as an admin
    header("Location: /php/forumcwh/");
    exit();
}

