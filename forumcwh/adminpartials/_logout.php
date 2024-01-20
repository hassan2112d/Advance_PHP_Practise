<?php 

session_start();

echo "<script>alert('You are Logged out Successfully !'); setTimeout(function(){ window.location.href = '/php/forumcwh'; }, 500);</script>";

session_destroy();



    