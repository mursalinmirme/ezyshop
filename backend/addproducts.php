<?php
  include "../assets/php/dbconnect.php";
    session_start();
      ?>
  <!-- include header -->
  <?php include "persials/header.php" ?>
  <!-- include navbar -->
  <?php include "persials/navbar.php" ?>

    <div class="sidebar_wrapper" id="body-pd">
      <div class="add_products pt-3">
        <div class="products-form">
          <form action="assets/php/addproductsfunc.php" method="POST" enctype="multipart/form-data" class="form form-control p-4">
            <div class="col">
              <h4 class="form-heading py-2 text-muted">Add Products</h4>
                </div> 
                <div class="row d-flex mb-2">
              <div class="col mb-3 form-group">
            <label class="mb-2 d-block text-muted">Product Category:</label>
          <select class="cate_selector form-group p-2 col-md-w-12 form-control" name="category" id="" required>
        <option>Select Category...</option>
      <option>Mobile</option>
    <option>Laptop</option>
      </select>
        </div>
          <div class="col mb-3 form-group">
            <label class="mb-2 text-muted">Product Quantity:</label>
              <input class="p-2 col-md-w-12 form-control" type="text" name="quantity" placeholder="Enter quantity" required>
                </div>
                  </div>
                <div class="row d-flex">
              <div class="col mb-3 form-group">
            <label class="mb-2 text-muted">Product Name:</label>
          <input class="category_name p-2 col-md-w-12 form-control" type="text" name="name" placeholder="Enter Name" required>
        </div>
      <div class="col mb-3 form-group">
    <label class="mb-2 text-muted">Product Slug:</label>
      <input class="p-2 col-md-w-12 form-control" type="text" name="slug" placeholder="Enter Slug" required>
        </div>
          </div>
            <div class="col mb-3 form-group">
              <label class="mb-2 text-muted">Product Description:</label>
                <textarea class="form-control p-2 col-md" type="text" name="description" rows="4" placeholder="Enter Description" required></textarea>
                  </div>
                <div class="col mb-3 form-group">
              <label class="mb-2 text-muted">Product Image:</label>
            <input class="form-control p-2" type="file" name="image" required>
          </div>
        <div class="row d-flex">
      <div class="col mb-3 form-group">
    <label class="mb-2 text-muted">Product Color:</label>
      <input class="category_name p-2 col-md-w-12 form-control" type="text" name="color" placeholder="Enter color" required>
        </div>
          <div class="col mb-3 form-group">
            <label class="mb-2 text-muted">Product Size:</label>
              <input class="p-2 col-md-w-12 form-control" type="text" name="size" placeholder="Enter size" required>
                </div>
                  </div>
                <div class="col mb-3 form-group">
              <label class="mb-2 text-muted">Product Main Price:</label>
            <input class="p-2 col-md-w-12 form-control" type="text" name="main_price" placeholder="Enter main price" required>
          </div>
        <div class="row d-flex">
      <div class="col mb-3 form-group">
    <label class="mb-2 text-muted">Product discount(%):</label>
      <input class="category_name p-2 col-md-w-12 form-control" type="text" name="discount" placeholder="Enter discount" required>
        </div>
          <div class="col mb-3 form-group">
            <label class="mb-2 text-muted">Product price with discount:</label>
              <input class="p-2 col-md-w-12 form-control" type="text" name="before_discount_price" placeholder="Enter price with discount" required>
                </div>
                  </div>
                <div class="col mb-3 form-group">
              <label class="mb-2 text-muted">Product Meta Title:</label>
            <input class="p-2 col-md-w-12 form-control" type="text" name="meta_title" placeholder="Enter meta title" required>
          </div>
        <div class="col mb-3 form-group">
      <label class="mb-2 text-muted">Product Meta Description:</label>
    <textarea class="form-control p-2 col-md" type="text" name="meta_desc" rows="4" placeholder="Enter meta description" required></textarea>
      </div>
        <div class="col mb-3 form-group">
          <label class="mb-2 text-muted">Product Meta Keyword:</label>
            <input class="p-2 col-md-w-12 form-control" type="text" name="meta_keyword" placeholder="Enter meta keyword" required>
              </div>
                <div class="row mt-3 d-flex">
                  <div class="col mb-3 form-group">
                <label class="mb-2 text-muted">Product Status:</label>
              <input class="status_check form-check-input" name="status" type="checkbox">
            </div>
          <div class="col mb-3 form-group">
        <label class="mb-2 text-muted">Product Popular:</label>
      <input class="popular_check form-check-input" name="popular" type="checkbox">
    </div>
      </div>
        <div class="col mt-4 form-group">
          <input class="p-2 bg-primary text-light form-control" type="submit" name="submit_product" value="Add Product" required>
            </div>
              </form>
                </div>
                  </div>
      
    </div><!-- end body-pd tag -->
<!-- include footer -->
<?php include "persials/footer.php" ?>