<?php 
    $uname = 'chitwan001';
    $pass = 'a1@ashvani.';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
    $loginquery = "SELECT id FROM users WHERE username='$uname' AND pwd='$pass'";
    $loginresult = $connsearch ->query($loginquery);
    if(mysqli_num_rows($loginresult)>0){
        while($loginqueryrow = $loginresult->fetch_assoc()){
            $id = $loginqueryrow['id'];
         }
         $bytes = openssl_random_pseudo_bytes(15,$cstrong);
         $hex   = bin2hex($bytes);
         $cookieid = $hex.$id;
         $cookieidquery = "UPDATE `users` SET `loginhash`='$cookieid' WHERE id='$id'";
         $connsearch->query($cookieidquery);
        setcookie('CGq3Y4',$cookieid,time()+60*60*24*90,"/");
        
    }
    else{
        echo "Username or password is incorrect!";
    }
    mysqli_close($connsearch);
?>