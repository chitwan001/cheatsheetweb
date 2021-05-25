<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .active{
                background-color: black;
        }
</style>
        <title>ADD TAGS</title>
</head>
<body>
        <div class="btns" id="btns">
                <button class="btn active" id="btn active">Click Me!</button>
                <button class="btn" id="btn">Click Me!</button>
                <button class="btn" id="btn">Click Me!</button>
                <button class="btn" id="btn">Click Me!</button>
        </div>
    <form action="" method="post">
        <label>NAME:</label><input type="text" name="name" required><br><br>
        <label>CODE:</label><input type="text" name="code" maxlength="20000" required><br><br>
        <label>DESCRIPTION:</label><input type="text" name="des" maxlength="2500" required><br><br>
        <label>LANGUAGE:</label><input type="text" name="lang" maxlength="255" required value="python"><br><br>
       <input type="submit" value="Submit">

</form>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $name = $_POST["name"];
        $code = $_POST["code"];
        $des = $_POST["des"];
        $lang = $_POST["lang"];
        $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
        $searchproductcontents = "INSERT INTO `cheatsheet`(`name`, `code`, `description`,`lang`) VALUES ('$name' , '$code' , '$des','$lang')";
        if ($connsearch->query($searchproductcontents) === TRUE) {
                echo "New record created successfully";
              }
        else {
                echo "Error: " . $searchproductcontents . "<br>" . $connsearch->error;
              }
              


?>
<script>
var header = document.getElementById("btns");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</body>
</html>