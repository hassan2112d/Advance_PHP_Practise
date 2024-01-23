<?php

include '../partials/_dbconnect.php';
session_start();

// Check if the user is currently blocked
if (isset($_SESSION['blocked_timestamp']) && time() < $_SESSION['blocked_timestamp']) {
    $time_left = $_SESSION['blocked_timestamp'] - time();
    echo '<script>alert("Account blocked. Please try again after ' . $time_left . ' seconds.");</script>';
    
    echo '<script>window.location.href = "/php/forumcwh/";</script>';
    exit();
}

// Check if the user has attempted to log in three times
if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 4) {
    $_SESSION['blocked_timestamp'] = time() + 10; // Block user for one hour
    echo '<script>alert("Maximum login attempts reached. Account blocked for one hour.");</script>';
    echo '<script>window.location.href = "/php/forumcwh/";</script>';
    exit();
}

// Check if the user is already logged in
if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] === true) {
    header("Location: /php/forumcwh/Dashboard/profile.php");
    exit();
}

// Display login form
?>

<!-- Your HTML code for the login form goes here -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $userpassword = $_POST['password'];

    // Check if login attempts session variable exists
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0; // Initialize the login attempts counter
    }

    $sql = "SELECT * FROM `admin`";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    if ($name == $data['admin_username'] && $_SESSION['login_attempts'] < 4) {
        if ($userpassword == password_verify($userpassword, $data['admin_password'])) {
            // Successful login
            $_SESSION['adminloggedin'] = true;
            $_SESSION['username'] = $name;
            unset($_SESSION['login_attempts']);
            header("Location: /php/forumcwh/Dashboard/profile.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['login_attempts']++;
            header("Location: /php/forumcwh/adminloginfirst.php?adminwrongpassword=false");
            exit();
        }
    } else {
        // Incorrect username or maximum login attempts reached
        $_SESSION['login_attempts']++;
        if ($_SESSION['login_attempts'] >= 4) {
            $_SESSION['blocked_timestamp'] = time() + 10; // Block user for one hour
            echo '<script>alert("Maximum login attempts reached. Account blocked for one hour.");</script>';
            exit();
        } else {
            header("Location: /php/forumcwh/adminloginfirst.php?adminwrongusername=false");
            exit();
        }
    }
}
?>
