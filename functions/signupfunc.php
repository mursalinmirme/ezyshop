<?php
include "function.php";
include "../assets/php/dbconnect.php";
if(isset($_POST['register_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if($password === $re_password){
        $match_email = "SELECT * FROM `users` WHERE email='$email'";
        $run_match_email = mysqli_query($conn,$match_email);
        if(mysqli_num_rows($run_match_email) == 1){
            redirect("../signup.php","This email has already an account!");
        }
        else{
            $passwordHash = password_hash($password,PASSWORD_DEFAULT);
            $unic_code = uniqid('', false);
            $unic_id = hexdec($unic_code);
            $query = "INSERT INTO `users`(`user_id`, `name`, `email`, `password`) VALUES ('$unic_id','$name','$email','$passwordHash')";
            $submit = mysqli_query($conn,$query);
            if($submit){
               redirect("../signup.php","Registration Successfully!");

            }
        }
    }else{
        redirect("../signup.php","Your password and re-password does not matched!");
    }

}


?>