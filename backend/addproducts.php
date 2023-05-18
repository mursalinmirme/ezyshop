<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories | Ezyshop eCommerce + admin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
    <div class="sidebar_wrapper" id="body-pd">

      <?php include "persials/header.php" ?>

      <?php include "persials/navbar.php" ?>
      
      <div class="add_categories">
          <div class="cat-form">
          <form action="" class="form form-control p-4">
                <div class="col">
                    <h4 class="text-center">Add Products</h4>
                </div>
                <div class="col mb-3">
                    <label class="d-block mb-2 text-muted">Product Name:</label>
                    <input class="w-100 p-1 col-md-w-12" type="text" name="cate_name" required>
                </div>
                <div class="col mb-3">
                    <label class="d-block mb-2 text-muted">Product Description:</label>
                    <input class="w-100 p-1 col-md" type="text" name="cate_desc" required>
                </div>
                <div class="col mb-3">
                    <label class="d-block mb-2 text-muted">Product Image:</label>
                    <input type="file" name="cate_img" required>
                </div>
                <div class="col mt-4">
                    <input class="w-100 p-1 p-2 bg-primary text-light" type="submit" name="submit_Categories" value="Add Product" required>
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
  </body>
</html>