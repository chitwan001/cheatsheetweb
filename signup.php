<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
    $newuserquery = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `username`, `pwd`) VALUES ('$fname','$lname','$email','$uname','$pass')";
    $newuserqueryresult = $connsearch ->query($newuserquery);
    if($newuserqueryresult){
        $getuserid="SELECT id FROM `users` WHERE username='$uname'";
        $getuseridresult = $connsearch->query($getuserid);
        while($getuseridrow = $getuseridresult->fetch_assoc()){
            $id = $getuseridrow['id'];
        }
        $bytes = openssl_random_pseudo_bytes(15,$cstrong);
        $hex   = bin2hex($bytes);
        $cookieid = $hex.$id;
        $updatehex = "UPDATE `users` SET `loginhash`='$cookieid' WHERE id='$id'";
        $connsearch ->query($updatehex);
        setcookie('CGq3Y4',$cookieid,time()+60*60*24*90,"/");
        echo "Success";
    }
    mysqli_close($connsearch);
?>