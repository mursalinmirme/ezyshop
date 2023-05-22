<?php
session_start();
if(isset($_SESSION['logedin'])){
    unset($_SESSION['logedin']);
    unset($_SESSION['user_unicid']);
    unset($_SESSION['user_roll_as']);
}
$_SESSION['logout_msg'] = "Log out successfully";
header("location: index.php");
?>