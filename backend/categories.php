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
                      <th>Id</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <tr>
                      <td>1</td>
                      <td>Mobile</td>
                      <td><img src="../download photos/oneplus.jpg" width="50px" height="50px" alt=""></td>
                      <td>Visible</td>
                      <td><a href=""><button class="bg-primary text-light px-3 py-1">Edit</button></a></td>
                      <td><a href=""><button class="bg-danger text-light px-3 py-1">Delete</button></a></td>

                    </tr>

                    <tr>
                      <td>1</td>
                      <td>Mobile</td>
                      <td><img src="../download photos/oneplus.jpg" width="50px" height="50px" alt=""></td>
                      <td>Visible</td>
                      <td><a href=""><button class="bg-primary text-light px-3 py-1">Edit</button></a></td>
                      <td><a href=""><button class="bg-danger text-light px-3 py-1">Delete</button></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
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
