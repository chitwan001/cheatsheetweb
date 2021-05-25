<?php 
    session_start();
    $q = $_POST['id'];
    $classname=$_POST['class'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
    $resultarray = [];
    if(isset($_COOKIE['CGq3Y4'])){
        $userid = $_SESSION['Ebi62'];
        $postliked = "SELECT liked FROM likestable WHERE userid='$userid' AND sheetid='$q'";
        $postlikeresult = $connsearch->query($postliked);
        if(mysqli_num_rows($postlikeresult)>0){
            while($poslikedrow = $postlikeresult ->fetch_assoc()){
                if($poslikedrow['liked']==1){
                    $resultarray[0] = "liked";
                }
                else{
                    $resultarray[0] = "like";
                }
            }
        }
        else{
            $resultarray[0]="like";
        }
    }
    else{
        $resultarray[0] = "like";
    }

    $likesquery = "SELECT likes FROM cheatsheet WHERE id='$q'";
    $likesqueryresult = $connsearch->query($likesquery);
    while($likesqueryrow = $likesqueryresult->fetch_assoc()){
        $resultarray[1] = $likesqueryrow['likes'];
}
$resultJSON = json_encode($resultarray);
echo $resultJSON;
mysqli_close($connsearch);
?>