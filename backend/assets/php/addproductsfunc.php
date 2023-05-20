<?php
include "../../../assets/php/dbconnect.php";
include "function.php";

if(isset($_POST['submit_product'])){
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $categories = $_POST['category'];
    $price = $_POST['main_price'];
    $discount_price = $_POST['discount'];
    $main_price = $_POST['before_discount_price'];
    $quantity = $_POST['quantity'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $meta_title = $_POST['meta_title'];
    $meta_desc = $_POST['meta_desc'];
    $meta_key = $_POST['meta_keyword'];
    if (isset($_POST['status'])) {
        $status = 1;
    } else {
        $status = 0;
    }
    if (isset($_POST['popular'])) {
        $popular = 1;
    } else {
        $popular = 0; 
    }
    $image = $_FILES['image']['name'];
    $path = "../../../upload/";
    $image_exten = pathinfo($image, PATHINFO_EXTENSION);
    $createImgName = 'ezyshop_products'.time().'.'.$image_exten;
    

    $query = "INSERT INTO `products`(`name`, `slug`, `description`, `image`, `categories`, `status`, `popular`, `price`, `discount_price`, `main_price`, `quantity`, `color`, `size`, `meta_title`, `meta_desc`, `meta_key`) VALUES ('$name','$slug','$description','$createImgName','$categories','$status','$popular','$price','$discount_price','$main_price','$quantity','$color','$size','$meta_title','$meta_desc','$meta_key')";

    $runQuery = mysqli_query($conn,$query);

    if($runQuery){ 
        move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$createImgName);
        redirect("../../addproducts.php","Product added successfully.");
    }else{
        redirect("../../addproducts.php","Something Went Wrong");
    }

}
?>