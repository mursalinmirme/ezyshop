<?php
session_start();
include "function.php";
include "../assets/php/dbconnect.php";
if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $match_email = "SELECT * FROM `users` WHERE email='$email'";

    $run_match_email = mysqli_query($conn,$match_email);

    if(mysqli_num_rows($run_match_email) === 1){
        while($row = mysqli_fetch_assoc($run_match_email)){
            $passwrodhash = $row['password'];
            if(password_verify($password,$passwrodhash)){
                $_SESSION['logedin'] = true;
                $_SESSION['user_unicid'] = $row['user_id'];
                $_SESSION['user_roll_as'] = $row['user_role_as'];
                if($row['user_role_as'] === "admin"){
                    redirect("../backend/admin.php","welcome to ezyshop admin dashboard");
                }else{
                    redirect("../frontend/index.php","welcome to ezyshop home page");
                }
            }else{
                redirect("../signin.php","invalide email and passwrod!");
            }
        }
    }else{
        redirect("../signin.php","Invalide creadientals!");
    }


}

?>