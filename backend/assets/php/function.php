<?php
function redirect($url,$messag){
    session_start();
    $_SESSION['message'] = $messag;
    header("location:$url");
    exit();
};
function getallCate($tablename){
    include "../assets/php/dbconnect.php";
    $querycate = "SELECT * FROM $tablename";
    $runquerycate = mysqli_query($conn, $querycate);
    return $runquerycate;
}

function getallproduct($tablename){
    include "../assets/php/dbconnect.php";
    $querycate = "SELECT * FROM $tablename";
    $runquerycate = mysqli_query($conn, $querycate);
    return $runquerycate;
}






?>