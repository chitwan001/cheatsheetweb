<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CheatSheet</title>
        <link href="prism.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/regular.min.js"
  />
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    </head>
    <body class="light-theme">
    <noscript>
         Your browser does not support JavaScript!
         <style>
        .body { display:none; }
    </style>
      </noscript>
      <div class="body">
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $connsearch = new mysqli($servername, $username, $password,"cheatsheet");
            $numberofsheets = rand(15,22);
            $idarray = (array) null;
            $langarray = (array) null;
        ?>
        <script src="prism.js"></script>
        
 <div class="loginmodal" id='loginmodal'>
 <div class="info" id='info'><div style="margin-left: 0.8vw;
    margin-top: 0.6vw;
    float: left;
    width: 80%;"></div>
    <div class="infoclose" onclick="closeinfo()"><i class="fa fa-close"></i></div>
</div>
<div class="loginform" id='loginform'>
    <div class="userimg"><img src="user.png" alt=""></div>
    <div class="login">Welcome back!
    </div>
    <div id='inputdiv' style="height: 15%; float: left; width: 100%;"><input type="text" name="uname" value id='usernamelogin' required><span>Username</span></div>
    <div id='inputdiv' style="height: 15%; float: left; width: 100%;"><input type="password" name="pwd" value id='passwordlogin' required><span>Password</span></div>
    <button onclick="loginsubmit()" type="submit">Sign In</button>
    <div class="createacc"><div class="createacccontent" onclick="signupform()">Create an account</div></div>
</div>
<div class="signupform" id='signupform'>
    <div class="signup">Let us join you with your journey!</div>
    <div class="signupformcontent">
        <span class='signuplabel'>First Name:</span><input type="text" name="fname" id="newfname" placeholder="Enter first name" autocomplete="off" required>
        <span class='signuplabel'>Last Name:</span><input type="text" name="lname" id="newlname" placeholder="Enter last name" autocomplete="off" required>
        <span class='signuplabel'>User Name:</span><input type="text" name="uname" id="newuname" placeholder="Enter username" autocomplete="off" required>
        <span class='signuplabel'>Email:</span><input type="email" name="email" id="newemail" placeholder="Enter email" required>
        <span class='signuplabel'>Password:</span><input type="password" name="pass" id="newpass" placeholder="Enter password" required>
        <button class="signupbtn" onclick="signupuser()">CREATE ACCOUNT</button>
    </div>
</div>
    <div class="closebtn" onclick="loginpopout()"><i class="fa fa-close"></i></div></div>            
<div class="header" id="header">
<div class="sitename">
            <div class="cheatsheet" data-text="CHEATWITH.ME">
            </div>
</div>
<button class="loginbtn" onclick="loginpopup()" id='loginbtn'>Sign In</button>
<div class="userdropdownmenubtn">
<button class="userdetailbtn" onclick="myaccount()" id='userdetailbtn'>My Account</button>
<div class="userdetailmenu" id="userdetailmenu">
    <div onclick="logout()">LOGOUT</div>
    <div>About</div>
    <div>Contact</div>
</div>
</div>
<div class="searchbtn">
<i class="fa fa-search" style="margin-top: 4px;"></i>
</div>
</div>
            <section class="nav" id="section">
                <div class="wave wave1" id="wave1"></div>
                <div class="wave wave2" id="wave2"></div>
                <div class="wave wave3" id="wave3"></div>
                <div class="parent"><div class="wave wave4" id="wave4"></div></div>
            </section>
            <div class="content" id="content">
            <div class="left">
            <div class="filter" id="filter">
            <div class="advancebtns" id="advancebtns">
                <div class="gobackbtn" onclick="gobackbtn()"><i class="fa fa-angle-left"></i></div>
                <div class="advancebtntitle" id="advancebtntitle">
                </div>
                <hr>
                <div class="advancebtncontent" id="advancebtncontent"></div>
            </div>
                <div class="btns" id="btns">
                <div><button class="btn active" onclick="filterSelection('all')" id="btn" value="ALL"><span>All</span></button></div>
                    <?php 
                    $i=0;
                 $idarrayquery = "SELECT id FROM cheatsheet";
                 $idarrayqueryresult = $connsearch->query($idarrayquery);
                 while($idarrayqueryrow = $idarrayqueryresult->fetch_assoc()){
                    $idarray[$i] = $idarrayqueryrow['id'];
                    $i++;
                 }
                 shuffle($idarray);
                 $random_id = array_rand($idarray , $numberofsheets);
                 for($l=0;$l<$numberofsheets;$l++){
                    $selectedid[$l] = $idarray[$random_id[$l]];
                 }
                 $leftid = array_diff($idarray,$selectedid);
                    $getbtns = "SELECT COUNT(lang), lang FROM cheatsheet GROUP BY(lang)";
                    $getbtnsresult = $connsearch->query($getbtns);
                    while($getbtnrow = $getbtnsresult->fetch_assoc()) {
                        echo "<div><button class='btn' onclick=filterSelection('".$getbtnrow['lang']."') value =".strtoupper($getbtnrow['lang'])."><span>".strtoupper($getbtnrow['lang'])."
                        </span></button></div>
                        ";
                      }
                    
                    
                    ?> 
                    <div><button class='btn' onclick=filterSelection()><span>CSS
                        </span></button></div>
                        <div><button class='btn' onclick=filterSelection()><span>CSS
                        </span></button></div>
                        <div><button class='btn' onclick=filterSelection()><span>CSS
                        </span></button></div>
                        <div><button class='btn' onclick=filterSelection()><span>CSS
                        </span></button></div>
                        <div><button class='btn' onclick=filterSelection()><span>CSS
                        </span></button></div>
                </div>
                
            </div>
            
            </div>
           
        <div class="container" id='container'>
        <ol id='ol'>
        <?php  
                 
                 for($j=0; $j<$numberofsheets ;$j++){
                    $searchproductcontents = "SELECT * FROM cheatsheet WHERE id='$selectedid[$j]'";
                 $searchproductcontentsresult = $connsearch->query($searchproductcontents);
                 while($searchproductcontentrow = $searchproductcontentsresult->fetch_assoc()) {
                    echo "<div class='filtercontent ".$searchproductcontentrow['lang']."' ><p style='display: none;' class='pid'>".$searchproductcontentrow['id']."</p><li id='li'><div id='title'>".$searchproductcontentrow['name']."</div>
                    <pre><code class='language-html'>".$searchproductcontentrow['code']."</code></pre></li><div class='description'><div class='likeshare'><div style='margin-left: 8px; margin-top: 8px;'><div class='like ".$searchproductcontentrow['id']."' id='like' onclick='likefunc(this)'></div></div><span class='likeno' id='likeno ".$searchproductcontentrow['id']."' style='margin-left: 5px;margin-top: 10px;'></span></div><div class='des'>"
                    .$searchproductcontentrow['description']."</div></div></div>
                    ";
                  }
                 }
                 foreach($leftid as $key => $value){
                     $j++;
                    $searchproductcontents = "SELECT * FROM cheatsheet WHERE id='$value'";
                 $searchproductcontentsresult = $connsearch->query($searchproductcontents);
                 while($searchproductcontentrow = $searchproductcontentsresult->fetch_assoc()) {
                    echo "<div class='extracontent ".$searchproductcontentrow['lang']."' ><p style='display: none;' class='pid'>".$searchproductcontentrow['id']."</p><li id='li'><div id='title'>".$searchproductcontentrow['name']."</div>
                    <pre><code class='language-html'>".$searchproductcontentrow['code']."</code></pre></li><div class='description'><div class='likeshare'><div style='margin-left: 8px; margin-top: 8px;'><div class='like ".$searchproductcontentrow['id']."' id='like' onclick='likefunc(this)'></div></div><span class='likeno' id='likeno ".$searchproductcontentrow['id']."' style='margin-left: 5px;margin-top: 10px;'></span></div><div class='des'>"
                    .$searchproductcontentrow['description']."</div></div></div>
                    ";
                  }
                 }
                 
            
            ?>
            </ol>
        </div>
        <div class="right" id="right">
            <div class="search">
                <input type="text" id="search" class="input" autocomplete="off" value="">
                <label id="label">Search</label>
            </div>
            <div class="toggleswitch"><label class="switch">
            <i class="fa fa-adjust"></i>
            <div>
              <input type="checkbox" class="switchinput"/>
              <span class="slider round"></span>
            </div>
          </label></div>
        <div class="dot" id="topbtn" onclick="topFunction()"><i class="fa fa-angle-up" style="margin-top: 7px;"></i></div>
        <div class="downscrollbtnanimated" id="downbtn" onclick="downFunction()"><i class="fa fa-angle-down" style="margin-top: 10px;"></i></div>
        </div>
        </div>
        <div class="footer" id='footer'>
            <p><b>NOTE:</b> Some tags are deprecated from <b>HTML 5</b>. Hence, they are not included.<br>They are: &lt;acronym&gt; , &lt;applet&gt; , &lt;basefont&gt; , &lt;big&gt; , &lt;center&gt; , &lt;dir&gt; , &lt;font&gt; , &lt;frame&gt; , &lt;frameset&gt; , &lt;isindex&gt; , &lt;noframes&gt; , &lt;s&gt; , &lt;strike&gt; , &lt;tt&gt; , &lt;u&gt; </p>
        </div>
        </div>
    </body>
    <script src="index.js"></script>
</html>