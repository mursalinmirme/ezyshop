<?php

function redirect($url,$message){
    $redirect_url = $url;
    session_start();
    $_SESSION['message'] = $message;
    header("location:$redirect_url");
    exit();
}

?>