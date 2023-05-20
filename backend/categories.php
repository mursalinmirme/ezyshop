<?php
include "assets/php/function.php";
// include "../assets/php/dbconnect.php";
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
    <div class="sidebar_wrapper" id="body-pd">

      <?php include "persials/header.php" ?>

      <?php include "persials/navbar.php" ?>
      
      <div class="categories">
        <div class="row pt-4">

          <div class="col">
            <div class="card">
              <div class="card-header">
                <h4>Category</h4>
              </div>
              <div class="card-body">
                <table class="table table-borderd table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">Id</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Image</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $category = getallCate("categories");
                  if(mysqli_num_rows($category) > 0){
                    while($row = mysqli_fetch_assoc($category)){ ?>
                      <tr class="redesigncate">
                      <td class="text-center pt-3"><?php echo $row['cate_id'] ?></td>
                      <td class="text-center pt-3"><?php echo $row['categories_name'] ?></td>
                      <td class="text-center"><img src="../upload/<?php echo $row['categories_image']?>" width="50px" height="50px" alt=""></td>
                      <td class="text-center pt-3"><?php echo $row['categories_status']?"visible":"hidden" ?></td>
                      <td class="text-center"><a href=""><button class="bg-primary text-light px-3 py-1 border-0 rounded-1 mt-2">Edit</button></a></td>
                      <td class="text-center"><a href=""><button class="bg-danger text-light px-3 py-1 border-0 rounded-1 mt-2">Delete</button></a></td>

                    </tr>
                  <?php  }
                  }else{
                    echo "no record found";
                  }
                  ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div><!-- body-pd -->
    <!-- javascript files are here -->
    <script src="assets/javascript/bootstrap.bundle.min.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/jquery.min.js"></script>
    <script src="assets/javascript/admin.js"></script>
  </body>
</html>
