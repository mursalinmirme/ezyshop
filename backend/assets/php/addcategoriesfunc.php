<?php
include "../../../assets/php/dbconnect.php";
include "function.php";

if(isset($_POST['submit_Categories'])){
    $cateName = $_POST['cate_name'];
    $cateSlug = $_POST['cate_slug'];
    $cateDesc = $_POST['cate_desc'];
    $cateMetaTitle = $_POST['cate_meta_name'];
    $cateMetadesc = $_POST['cate_meta_desc'];
    $cateMetakeyword = $_POST['cate_meta_keyword'];
    if (isset($_POST['cate_status'])) {
        $cateStatus = 1;
    } else {
        $cateStatus = 0;
    }
    if (isset($_POST['cate_popular'])) {
        $catePopular = 1;
    } else {
        $catePopular = 0; 
    }
    $cateImage = $_FILES['cate_img']['name'];
    $path = "../../../upload/";
    $image_exten = pathinfo($cateImage, PATHINFO_EXTENSION);
    $createImgName = 'ezyshop_category'.time().'.'.$image_exten;
    





    $query = "INSERT INTO `categories`(`categories_name`, `categories_slug`, `categories_desc`, `categories_image`, `categories_status`, `categories_popular`, `categories_meta_title`, `categories_meta_desc`, `categories_meta_keywords`) VALUES ('$cateName','$cateSlug','$cateDesc','$createImgName','$cateStatus','$catePopular','$cateMetaTitle','$cateMetadesc','$cateMetakeyword')";

    $runQuery = mysqli_query($conn,$query);

    if($runQuery){ 
        move_uploaded_file($_FILES['cate_img']['tmp_name'],$path.'/'.$createImgName);
        redirect("../../addcategories.php","Categories added successfully.");
    }else{
        redirect("../../addcategories.php","Something Went Wrong");
    }

}
?>