<?php
  session_start();
    include "../functions/function.php";
      if(!isset($_SESSION['user_unicid'])){
        redirect("../signin.php","After signin you can visit admin page!");
          }elseif(isset($_SESSION['user_unicid'])){
        if($_SESSION['user_roll_as'] == 'user'){
      redirect("../frontend/index.php","you are not autorized for admin");
    }
  }
?>
<!-- include header -->
  <?php include "persials/header.php" ?>
    <!-- include nav bar -->
      <?php include "persials/navbar.php" ?>
        <!-- the frame of dashboard -->
          <div class="sidebar_wrapper" id="body-pd">
            <!-- include dashboard -->
              <?php include "dashboard.php" ?>
                </div>
<!-- include footer -->
<?php include "persials/footer.php"; ?>