<?php session_start();?>


<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<title>MY</title>
<link rel = "stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
input[type="checkbox"]#menu_state {
display: none;
}
input[type="checkbox"]:checked ~ nav {
width: 250px;
}
input[type="checkbox"]:checked ~ nav label[for="menu_state"] i::before {
content: "\f053";
}
input[type="checkbox"]:checked ~ nav ul {
width: 100%;
}
input[type="checkbox"]:checked ~ nav ul li a i {
border-right: 1px solid #2f343e;
}
input[type="checkbox"]:checked ~ nav ul li a span {
opacity: 1;
transition: opacity 0.25s ease-in-out;
}
input[type="checkbox"]:checked ~ main {
left: 250px;
}
nav {
position: fixed;
z-index: 9;
top: 0;
left: 0;
bottom: 0;
background: #383e49;
color: #9aa3a8;
width: 50px;
font-family: 'Montserrat', sans-serif;
font-weight: lighter;
transition: all 0.15s ease-in-out;
}
nav label[for="menu_state"] i {
cursor: pointer;
position: absolute;
top: 50%;
right: -8px;
box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
background: #fff;
font-size: 10px;
display: flex;
justify-content: center;
align-items: center;
height: 15px;
width: 15px;
border-radius: 50%;
border: 1px solid #ddd;
transition: width 0.15s ease-in-out;
z-index: 1;
}
nav label[for="menu_state"] i::before {
margin-top: 2px;
content: "\f054";
}
nav label[for="menu_state"] i:hover {
box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
nav ul {
overflow: hidden;
display: block;
width: 50px;
list-style-type: none;
padding: 0;
margin: 0;
}
nav ul li {
border: 1px solid #2f343e;
position: relative;
}
nav ul li.unread:after {
content: attr(data-content);
position: absolute;
top: 10px;
left: 25px;
display: flex;
justify-content: center;
align-items: center;
width: 15px;
height: 15px;
border-radius: 50%;
color: #fff;
background: #ef5952;
font-size: 8px;
}
nav ul li:not(:last-child) {
border-bottom: none;
}
nav ul li.active a {
background: #4c515d;
color: #fff;
}
nav ul li a {
position: relative;
display: block;
white-space: nowrap;
text-decoration: none;
color: #9aa3a8;
height: 50px;
width: 100%;
transition: all 0.15s ease-in-out;
}
nav ul li a:hover {
background: #4c515d;
color: #fff;
}
nav ul li a * {
height: 100%;
display: inline-block;
}
nav ul li a i {
text-align: center;
width: 50px;
z-index: 999999;
}
nav ul li a i.fa {
line-height: 50px;
}
nav ul li a span {
padding-left: 25px;
opacity: 0;
line-height: 50px;
transition: opacity 0.1s ease-in-out;
}
#logo{width:200px; height:150px; display: block; margin-top:50px;margin-right: auto; margin-left: auto;}

#wrapper { 
        width: 950px; 
        margin: 15px auto; 
        text-align: left; 
    }

body { text-align: center;
  background-image: url('https://pix6.agoda.net/geo/city/16552/1_16552_02.jpg?s=1920x822.png');
  background-position: 100% 16px;
  background-position: right bottom;
  background-repeat:no-repeat;
  background-attachment: fixed;
  background-size: 1536px 755px;
  background-position: top; }
#my{
  border: 8px solid #ffffff;
  /*background-color: #CDECFA;*/
  width: 900px;
  height: 400px;
  margin-top: 30px;
  margin-left: 30px;
}
#my_info{
  background-color: white;
  margin-top: -20px;
  margin-left: 215px;
  height: 468px;
  width: 500px;
}
</style>

<body id = "wrapper">
<header>
  <h1 id = "logo"><a href="Main.php"><img src = "image/로고3.png" width="200px" height="140px" alt=""></a> </h1>
</header>
<input type="checkbox" id="menu_state">
<nav>
   <label for="menu_state"><i class="fa"></i></label> 
  <ul>
    <li>
      <a href="MY.php">
        <i class="fa fa-user-circle"></i>
        <span>My</span>
      </a>
    </li>
    <li>
      <a href="Mate.php">
        <i class="fa fa-users"></i>
        <span>Mate</span>
      </a>
    </li>
    <li>
      <a href="Chat.php">
        <i class="fa fa-comments"></i>
        <span>Chat</span>
      </a>
    </li>
    <li>
      <a href="Contact.php">
        <i class="fa fa-info-circle"></i>
        <span>Contact Us</span>
      </a>
  </ul>
</nav>

<?php
            if(!isset($_SESSION['email']) || !isset($_SESSION['username'])) {

            echo "<script>alert('로그인이 필요한 기능입니다.');</script>";
            echo("<script>location.href='Login.php';</script>");
            }

    else { ?>
    <div id = "my_info">
    <p style = "font-size: 21px; font-weight: bolder; line-height: 3.3em; text-align: center;">My 페이지</p>
    <p style = "font-size: 18px; margin-top:-20px;font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My프로필</p>
     <div style = "float:left; margin-top:-12px;"><hr style="width:130px;float: left;border-width: 2px; color:black;"><hr style="width:364px; float:left color:black;"></div>
     <br>
    <p style = "font-size:17px; font-weight: bold; line-height: 2.0em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;아이디&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['email'];?></p>
    <p style = "font-size:17px; font-weight: bold;  line-height: 2.0em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;이름&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'];?></p>
    <p style = "font-size:17px; font-weight: bold;  line-height: 2.0em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;성별&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['Gender'];?></p>
    <p style = "font-size:17px; font-weight: bold;  line-height: 2.0em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;나이&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['Age'];?></p>
    <br>
          
    <?php } ?>

    <!-- <button onclick="location.href='Main.php'">회원탈퇴</button> -->
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;로그아웃을 하시겠습니까?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button style = "color: #FF3300; font-size:18px; background-color: white; border:0px;"onclick="location.href='Logout.php'">로그아웃</button>
  </span>
    </div>
  </div>
</span>
</div>
</div>

</body>
</html> 


