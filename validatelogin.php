<?php 
    if(isset($_COOKIE['CGq3Y4'])){
        $cookieval = $_COOKIE['CGq3Y4'];
        $servername = "localhost";
    $username = "root";
    $password = "";
    $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
    $checkcookie = "SELECT * FROM users WHERE loginhash='$cookieval'";
    $checkcookieresult = $connsearch ->query($checkcookie);
    if(mysqli_num_rows($checkcookieresult)>0){
        while($checkcookierow = $checkcookieresult->fetch_assoc()){
            session_start();
            $_SESSION['Ebi62']=$checkcookierow['id'];
         }
         echo 'userdetailbtn';
    }
    else{
        setcookie("CGq3Y4", "", time() - 3600,"/");
        session_unset();
        session_destroy();
        echo 'loginbtn';
    }
    mysqli_close($connsearch);
    }
    else{
        echo 'loginbtn';
    }
    
?>