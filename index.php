<?php
include "functions/function.php";
session_start();
if(isset($_SESSION['user_unicid'])){
  if($_SESSION['user_roll_as'] == 'user'){
    redirect("frontend/index.php","Welcome back Mr. Omok");
  }elseif($_SESSION['user_roll_as'] == 'admin'){
    redirect("backend/admin.php","Welcome back a adimn of ezyshop Mr. Omok");
  }

  redirect("backend/admin.php","Welcome back a adimn of ezyshop Mr. Omok");

}

?>
<!-- include header page -->
<?php include "persials/header.php" ?>

<div class="container-fluid">
 <h1 class="py-4">Webcome to ezyshop, A different thinking able eshop</h1>
</div>
<!-- include footer page -->
<?php include "persials/footer.php" ?>




