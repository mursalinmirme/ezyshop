<?php
include "../assets/php/dbconnect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories | Ezyshop eCommerce + admin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />
    <link rel="stylesheet" href="assets/css/addcatagories.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- alertfyjs CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  </head>
  <body>
    <div class="sidebar_wrapper" id="body-pd">

      <?php include "persials/header.php" ?>

      <?php include "persials/navbar.php" ?>
      <div class="add_categories">
          <div class="cat-form p-4">
            <form action="assets/php/addcategoriesfunc.php" method="POST" enctype="multipart/form-data" class="form form-control p-4">
                <div class="col">
                    <h4 class="form-heading py-2 text-muted">Add Categories</h4>
                </div> 
                <div class="row d-flex">
                  <div class="col mb-3 form-group">
                      <label class="mb-2 text-muted">Categories Name:</label>
                      <input class="category_name p-2 col-md-w-12 form-control" type="text" name="cate_name" placeholder="Enter Name" required>
                  </div>
                  <div class="col mb-3 form-group">
                      <label class="mb-2 text-muted">Categories Slug:</label>
                      <input class="p-2 col-md-w-12 form-control" type="text" name="cate_slug" placeholder="Enter Slug" required>
                  </div>
                </div>
                <div class="col mb-3 form-group">
                    <label class="mb-2 text-muted">Categories Description:</label>
                    <textarea class="form-control p-2 col-md" type="text" name="cate_desc" rows="4" placeholder="Enter Description" required></textarea>
                </div>
                <div class="col mb-3 form-group">
                    <label class="mb-2 text-muted">Categories Image:</label>
                    <input class="form-control p-2" type="file" name="cate_img" required>
                </div>
                <div class="col mb-3 form-group">
                    <label class="mb-2 text-muted">Categories Meta Title:</label>
                    <input class="p-2 col-md-w-12 form-control" type="text" name="cate_meta_name" placeholder="Enter meta title" required>
                </div>
                <div class="col mb-3 form-group">
                    <label class="mb-2 text-muted">Categories Meta Description:</label>
                    <textarea class="form-control p-2 col-md" type="text" name="cate_meta_desc" rows="4" placeholder="Enter meta description" required></textarea>
                </div>
                <div class="col mb-3 form-group">
                    <label class="mb-2 text-muted">Categories Meta Keyword:</label>
                    <input class="p-2 col-md-w-12 form-control" type="text" name="cate_meta_keyword" placeholder="Enter meta keyword" required>
                </div>
                <div class="row mt-3 d-flex">
                  <div class="col mb-3 form-group">
                      <label class="mb-2 text-muted">Categories Status:</label>
                      <input class="status_check form-check-input" name="cate_status" type="checkbox">
                  </div>
                  <div class="col mb-3 form-group">
                      <label class="mb-2 text-muted">Categories Popular:</label>
                      <input class="popular_check form-check-input" name="cate_popular" type="checkbox">
                  </div>
                </div>
                <div class="col mt-4 form-group">
                    <input class="p-2 bg-primary text-light form-control" type="submit" name="submit_Categories" value="Add Categories" required>
                </div>
                </form>
          </div>
      </div>
      
    </div>
    <!-- javascript files are here -->
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/jquery.min.js"></script>
    <script src="assets/javascript/admin.js"></script>
    <!-- alertify JavaScript code -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
      <?php if(isset($_SESSION['message'])){ ?>
       alertify.set('notifier','position', 'top-right');
       alertify.success('<?php echo $_SESSION['message']; ?>');
      <?php 
    unset($_SESSION['message']);
    } ?>
    </script>
  </body>
</html>