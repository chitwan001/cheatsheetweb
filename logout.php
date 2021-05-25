<?php

    if(isset($_COOKIE['CGq3Y4'])){
        session_unset();
        session_destroy();
        $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $cookievalue = $_COOKIE['CGq3Y4'];
    $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
    $logoutquery = "UPDATE `users` SET `loginhash`=NULL WHERE loginhash = '$cookievalue'";
    $connsearch ->query($logoutquery);
    setcookie("CGq3Y4", "", time() - 3600, "/");
    }
    else{
        session_unset();
        session_destroy();
    }
    mysqli_close($connsearch);
?>