<?php
session_start();
include "../functions/function.php";

if(!isset($_SESSION['user_unicid'])){
  redirect("../signin.php","After signin you can visit user page!");
}elseif(isset($_SESSION['user_unicid'])){
if($_SESSION['user_roll_as'] == 'admin'){
    redirect("../backend/admin.php","you are not autorized for user!");
  }

}


if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
}

echo "<br>";

echo "Welcome to user page";


?>