<?php 
include '../partials/_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_id = $_GET['admin_id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $new_password = $_POST['password'];

    // Check if a file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $file = $_FILES['image'];
        $filename = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        $folder = "../uploads/" . $filename;

        // Move the uploaded file
        if (move_uploaded_file($file_tmp_name, $folder)) {
            // File uploaded successfully
            $sql = "UPDATE `admin` SET admin_username='$name', admin_email='$email', admin_image='$folder' WHERE admin_id=$admin_id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Admin Credentials Updated Successfully!'); setTimeout(function(){ window.location.href = '/php/forumcwh/Dashboard/profile.php'; }, 500);</script>";
            } else {
                echo "Error updating admin credentials: " . mysqli_error($conn);
            }
        } else {
            // Handle the file upload error
            echo "Error uploading file: " . $_FILES['image']['error'];
        }
    } else {
        // File was not uploaded, update the database without changing the image

        // Check if a new password is provided
        if (!empty($new_password)) {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update the database with the hashed password
            $sql = "UPDATE `admin` SET admin_username='$name', admin_email='$email', admin_password='$hashed_password' WHERE admin_id=$admin_id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Admin Credentials Updated Successfully!'); setTimeout(function(){ window.location.href = '/php/forumcwh/Dashboard/profile.php'; }, 500);</script>";
            } else {
                echo "Error updating admin credentials: " . mysqli_error($conn);
            }
        } else {
            // No new password provided, update the database without changing the password
            $sql = "UPDATE `admin` SET admin_username='$name', admin_email='$email' WHERE admin_id=$admin_id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Admin Credentials Updated Successfully!'); setTimeout(function(){ window.location.href = '/php/forumcwh/Dashboard/profile.php'; }, 500);</script>";
            } else {
                echo "Error updating admin credentials: " . mysqli_error($conn);
            }
        }
    }
}

