<?php

function redirect($url,$messag){
    session_start();
    $_SESSION['message'] = $messag;
    header("location:$url");
    exit();
}

?>