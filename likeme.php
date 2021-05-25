<?php
session_start();
 $q =$_POST['id'];
 $classname=$_POST['class'];
 $servername = "localhost";
 $username = "root";
 $password = "";
 $userid = $_SESSION['Ebi62'];
 $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
    if($classname=="like"){
        $likeupdate = "UPDATE `cheatsheet` SET `likes`=`likes`+1 WHERE id='$q'";
        $connsearch->query($likeupdate);
        $checkrecord = "SELECT userid FROM likestable WHERE userid='$userid' AND sheetid='$q'";
        $checkrecordresult = $connsearch->query($checkrecord);
        if(mysqli_num_rows($checkrecordresult)>0){
            $likeupdateintolikes = "UPDATE `likestable` SET `liked`=1 WHERE userid=$userid AND sheetid=$q";
            $connsearch->query($likeupdateintolikes);
        }
        else{
            $likeupdateintolikes = "INSERT INTO `likestable`(`userid`, `sheetid`, `liked`) VALUES ('$userid','$q',1)";
            $connsearch->query($likeupdateintolikes);
        }
    }
    elseif($classname=="liked"){
        $likeupdate = "UPDATE `cheatsheet` SET `likes`=`likes`-1 WHERE id='$q'";
        $connsearch->query($likeupdate);
        $likeupdateintolikes = "UPDATE `likestable` SET `liked`=0 WHERE userid=$userid AND sheetid=$q";
        $connsearch->query($likeupdateintolikes);
    }
    $likesquery = "SELECT likes FROM cheatsheet WHERE id='$q'";
    $likesqueryresult = $connsearch->query($likesquery);
    while($likesqueryrow = $likesqueryresult->fetch_assoc()){
        echo $likesqueryrow['likes'];
}
mysqli_close($connsearch);
?>