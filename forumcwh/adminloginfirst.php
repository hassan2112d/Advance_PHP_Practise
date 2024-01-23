<?php
session_start();


include 'adminpartials/adminheader.php';
include 'partials/_dbconnect.php';



if (isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin'] == true) {
    header("Location: /php/forumcwh/Dashboard/profile.php");
    exit();
}
if(isset($_GET['adminwrongpassword']) && $_GET['adminwrongpassword']== "false"){
    echo '<script>alert("Wrong Password . You have three more chances.");</script>';

}
if(isset($_GET['adminwrongusername']) && $_GET['adminwrongusername']== "false"){
    echo '<script>alert("Wrong Username. TRY AGAIN");</script>';
}


echo '

<div class="limiter">
    <div class="container-login100" style="background-image: url(assets/images/bg-01.jpg);">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Admin Login Portal
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5" action="adminpartials/_adminlogin.php" method="post">
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="User name">
                    <span class="focus-input100" data-placeholder="👤"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="🔒"></span>
                </div>
                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>';
include '../adminpartials/adminfooter.php';
 






