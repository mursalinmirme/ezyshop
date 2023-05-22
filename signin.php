<?php
  session_start();
   ?>
<!-- include header page -->
<?php include "persials/header.php" ?>
<!-- sign in page start -->
<section class="vh-100" style="background-color: #ffffff;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center pt-5 h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-3">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mx-1 mx-md-4 mt-4 <?php if(isset($_SESSION['message'])){echo "mb-3";}else{echo "mb-5";}?>">Sign In</p>
                <span class="text-center d-block mb-2 text-danger fw-medium">
                <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];unset($_SESSION['message']);}else{echo "";}?>
                </span>
                <form action="functions/signinfunc.php" method="POST" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label text-muted" for="form3Example3c">Your Email:</label>
                      <input type="email" name="email" id="form3Example3c" class="form-control p-3" placeholder="Enter your email" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label text-muted" for="form3Example4c">Password:</label>
                      <input type="password" name="password" id="form3Example4c" class="form-control p-3" placeholder="Enter your password" required />
                    </div>
                  </div>

                  <div class="d-flex justify-content-center pt-3">
                    <button type="submit" name="login_btn" class="btn btn-primary w-100 p-2 fw-medium">Log In</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="photos/signin.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- include footer page -->
<?php include "persials/footer.php"; ?>