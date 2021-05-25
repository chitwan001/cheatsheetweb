var content = document.getElementById("content");
var filter = content.getElementsByClassName("filter");
for(j=0;j<filter.length;j++){
    var btns = filter[j].getElementsByTagName('button')
    for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var btnvalue = this.value;
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  document.getElementById('btns').classList.add('appendbtns');
  document.getElementById('advancebtns').classList.add("showadvancebtns");
  var node = document.createElement("div");
  var textnode = document.createTextNode(btnvalue);
  node.appendChild(textnode);
  while(document.getElementById("advancebtntitle").firstChild) {
    document.getElementById("advancebtntitle").removeChild(document.getElementById("advancebtntitle").firstChild);
}
  document.getElementById("advancebtntitle").appendChild(node);
  });
}
}
filterSelection("")
function filterSelection(c) {
  var x, i,y,j;
  var showol = document.createElement('ol');
  showol.setAttribute('id','advancebtncontentol');
  while(document.getElementById("advancebtncontent").firstChild) {
    document.getElementById("advancebtncontent").removeChild(document.getElementById("advancebtncontent").firstChild);
}
  if (c == ""){
    x = document.getElementsByClassName("filtercontent");
  }
  else if(c=="all"){
    x = document.getElementsByClassName("filtercontent");
    y = document.getElementsByClassName("extracontent");
    for(j=0;j<y.length;j++){
      w3RemoveClass(y[j],'show');
    }
    c="";
  }
  else{
    x = document.querySelectorAll('.filtercontent,.extracontent');
  }
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], `show`);
    x[i].removeAttribute('id');
    if (x[i].className.indexOf(c) > -1){
      w3AddClass(x[i],`show`);
      x[i].setAttribute('id',`div${i+1}`);
      var lishow = x[i].getElementsByTagName('li');
    var divtitle = lishow[0].getElementsByTagName('div');
    var title = divtitle[0].textContent;
    var textnode = document.createTextNode(title);
    var a = document.createElement('a');
    a.classList.add('advancebtna');
    a.setAttribute('href',`#div${i+1}`);
    a.setAttribute('onclick','contentemphasize(this.id)');
    a.setAttribute('id',`${i+1}`);
    var li = document.createElement('li');
    li.appendChild(textnode);
    a.appendChild(li);
    showol.appendChild(a);
    } 
  }
  document.getElementById('advancebtncontent').appendChild(showol);
}
function contentemphasize(id){
  document.getElementById(`div${id}`).classList.toggle('flashcontentdiv');
  document.getElementById(`div${id}`).classList.remove('flashcontentdiv');
}
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var gotopbtn = document.getElementById("topbtn");
    var godownbtn = document.getElementById("downbtn");
    var rightdiv = document.getElementById("right");
    var leftdiv = document.getElementById("filter");
    var content = document.getElementById("content");
    var footer = document.getElementById("footer");
    var wave1 = document.getElementById("wave1");
    var wave2= document.getElementById("wave2");
    var wave3 = document.getElementById("wave3");
    var wave4 = document.getElementById("wave4");
    var search = document.getElementById("search");
    var h = content.offsetHeight;
  if (document.body.scrollTop > 0.25*h || document.documentElement.scrollTop > 0.25*h) {
    gotopbtn.className ="upscrollbtnanimated";
    gotopbtn.classList.add('upshowanimate');
    search.classList.add("searchanimation");
  } else {
    gotopbtn.classList.remove('upshowanimate');
    search.classList.remove("searchanimation");
  }
  if(document.body.scrollTop > 0.75*h || document.documentElement.scrollTop > 0.75*h){
    document.getElementById('advancebtncontent').classList.add('smalladvancebtncontent');
    rightdiv.classList.add("smalldiv");
    leftdiv.classList.add("smalldiv");
    godownbtn.classList.add('downshowanimate');
    footer.classList.add("footershow");
  }
  else{
    document.getElementById('advancebtncontent').classList.remove('smalladvancebtncontent');
    rightdiv.classList.remove("smalldiv");
    leftdiv.classList.remove("smalldiv");
    godownbtn.classList.remove('downshowanimate');
    footer.classList.remove("footershow");
  }
}
function topFunction() {
    
  document.documentElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
function downFunction() {
    
  window.scroll({
      top: document.documentElement.scrollHeight,
      behavior: "smooth"
  })
}
document.getElementById("search").onkeyup = function(event){
  document.getElementById('btns').classList.remove('appendbtns');
  document.getElementById('advancebtns').classList.remove("showadvancebtns");
  document.getElementById("search").setAttribute('value',document.getElementById("search").value);
  var value = document.getElementById("search").value.toUpperCase();
  var content = document.querySelectorAll('.filtercontent,.extracontent');
  for(var i=0;i<content.length ; i++){
    var li = content[i].getElementsByTagName('div')[0];
    var match = li.textContent || li.innerText;
    if(match.toUpperCase().indexOf(value)>-1){
      content[i].classList.add("show");
    }
    else{
      content[i].classList.remove("show");
    }
  }
}
function gobackbtn(){
  document.getElementById('advancebtns').classList.remove('showadvancebtns');
  document.getElementById('btns').classList.remove('appendbtns');
}
const themeSwitch = document.querySelector('.switchinput');

themeSwitch.addEventListener('change', () => {
  document.body.classList.toggle('dark-theme');
});
function likefunc(element){
  var id;
  id = element.className.split(" ");
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById(`likeno ${id[1]}`).innerHTML=this.responseText;
    }
  }
  if(id[0]=="like"){
    element.classList.remove(`like`);
    element.classList.remove(`${id[1]}`);
    element.classList.add(`liked`);
    element.classList.add(`${id[1]}`);
    element.classList.toggle('likeanimation');
    i[0]="liked";
  }
  else if(id[0]=="liked"){
    element.classList.remove(`liked`);
    element.classList.remove(`${id[1]}`);
    element.classList.add(`like`);
    element.classList.add(`${id[1]}`);
    element.classList.remove('likeanimation');
  }
  xmlhttp.open("POST","likeme.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id="+ window.encodeURIComponent(id[1])+"&class="+window.encodeURIComponent(id[0]));
  
}
function loginpopup(){
  document.getElementById('loginmodal').style.display='flex';
  document.body.style.overflowY = "hidden";
}
function loginpopout(){
  document.getElementById('loginmodal').style.display='none';
  document.body.style.overflowY = "overlay";
  document.getElementById('loginform').style.display='block';
  document.getElementById('signupform').style.display='none';
}


function loginsubmit(){
  var username = document.getElementById("usernamelogin").value;
  var pass = document.getElementById("passwordlogin").value;
  var xmlhttp = new XMLHttpRequest;
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      var info = document.getElementById(`info`);
      info.getElementsByTagName('div')[0].innerHTML=this.responseText;
      if(info.getElementsByTagName('div')[0].innerHTML==""){
        window.location.reload();
      }
      else{
        document.getElementById(`info`).style.display='block';
      }
    }
  }
  xmlhttp.open("POST","getlogin.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("uname="+ window.encodeURIComponent(username)+"&pass="+window.encodeURIComponent(pass));

  
}
function closeinfo(){
  document.getElementById(`info`).style.display='none';
}

window.onload = function(){

  var validatelogin = new XMLHttpRequest;
  validatelogin.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200){
      var responsetext = this.responseText;
      if(responsetext=='userdetailbtn'){
        document.getElementById('userdetailbtn').style.display='block';
        document.getElementById('loginbtn').style.display='none';
      }
      else{
        document.getElementById('userdetailbtn').style.display='none';
        document.getElementById('loginbtn').style.display='block'
      }
    }
  }
  validatelogin.open("POST","validatelogin.php",true);
  validatelogin.send();








  var content = document.querySelectorAll(".filtercontent , .extracontent");
  var xmlhttp = [];
  for(var i=0 ; i<content.length ; i++){
    (function(i){
    var p = content[i].getElementsByTagName('div');
    var id = p[7].className;
    var classname = id.split(" ");
    xmlhttp[i]=new XMLHttpRequest();
  xmlhttp[i].onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      var resultobj= JSON.parse(this.responseText);
      document.getElementById(`likeno ${classname[1]}`).innerHTML=resultobj[1];
      if(resultobj[0]=="liked"){
        var changeelement =  document.getElementsByClassName(`like ${classname[1]}`)[0];
        changeelement.classList.remove(`like`);
        changeelement.classList.remove(`${classname[1]}`);
        changeelement.classList.add(`liked`);
        changeelement.classList.add(`${classname[1]}`);
      }
    }
  }
    xmlhttp[i].open("POST","getlikes.php",true);
    xmlhttp[i].setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp[i].send("id="+ window.encodeURIComponent(classname[1])+"&class="+window.encodeURIComponent(classname[0]));
})(i);
}
}

function myaccount(){
  document.getElementById("userdetailmenu").classList.toggle("showmenu")
}
window.onclick = function(event) {
  if (!event.target.matches('.userdetailbtn')) {
    var dropdowns = document.getElementsByClassName("userdetailmenu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('showmenu')) {
        openDropdown.classList.remove('showmenu');
      }
    }
  }
  
}

function logout(){
  var logout = new XMLHttpRequest;
  logout.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200){
      window.location.reload();
    }
  }
  logout.open("POST","logout.php",true);
  logout.send();
}

document.getElementById("usernamelogin").onkeyup = function(event){
  document.getElementById("usernamelogin").setAttribute('value',document.getElementById("usernamelogin").value);
}
document.getElementById("passwordlogin").onkeyup = function(event){
  document.getElementById("passwordlogin").setAttribute('value',document.getElementById("passwordlogin").value);
}


function signupform(){
  document.getElementsByClassName('loginform')[0].style.display='none';
  document.getElementsByClassName('signupform')[0].style.display='block';
}

function signupuser(){
  var fname = document.getElementById('newfname').value;
  var lname = document.getElementById('newlname').value;
  var uname = document.getElementById('newuname').value;
  var email = document.getElementById('newemail').value;
  var pass = document.getElementById('newpass').value;
  var signuprequest = new XMLHttpRequest;
  signuprequest.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200){
      if(this.responseText=="Success"){
        window.location.reload();
      }
    }
  }
  signuprequest.open('POST','signup.php',true);
  signuprequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  signuprequest.send("fname="+ window.encodeURIComponent(fname)+"&lname="+window.encodeURIComponent(lname)+"&uname="+window.encodeURIComponent(uname)+"&email="+window.encodeURIComponent(email)+"&pass="+window.encodeURIComponent(pass));
}