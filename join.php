<!DOCTYPE html>
<html>
<head>
	<title>Tripwith : 회원가입</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
.menu_state_part {
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
  width: 100%;
  display: inline-block;
}
nav ul li a i {
  text-align: center;
  width: 40px;
  z-index: 999999;
}

nav ul li a span {
  padding-left: 25px;
  opacity: 0;
  line-height: 50px;
  transition: opacity 0.1s ease-in-out;
}


h1 { font: bold 20px verdana, sans-serif; } 
h2 { font: bold 14px verdana, sans-serif; }

body { text-align: center; }
#wrapper { 
        width: 950px; 
        margin: 15px auto; 
        text-align: left; 
    }
#main_footer { clear: both; text-align: center; padding: 20px; border-top: 2px solid #999999; }



.join_image{
	display: flex;
	margin-left: 300px;
	margin-top: 60px;
}
.join_section{
	margin-left: 980px;
	margin-top: -379px;
	width: 700px;
	height: 380px;
	font-size: 30px;
}
.submit_join{
	width: 160px;
	height: 70px;
	font-size: 25px;
	margin-top: 20px;
	border:solid 1px black;
	background-color: lightgray;
}
</style>
</head>
<body>

<!--....................Menu ................... -->
<input type="checkbox" id="menu_state" checked>
<nav class="menu_state_part">
  <label for="menu_state"><i class="fa"></i></label>
  <ul>
    <li data-content="5" class="unread">
      <a href="login_page.php">
        <i class="fa fa-inbox"></i>
        <span>My</span>
      </a>
    </li>
    <li>
      <a href="plan.html">
        <i class="fa fa-heart" style="line-height: 50px;"></i>
        <span>Schedule</span>
      </a>
    </li>
    <li>
      <a href="tripwith_mate.html">
        <i class="fa fa-paper-plane" style="line-height: 50px;"></i>
        <span>Mate</span>
      </a>
    </li>
    <li>
      <a href="tripwith_chat.html">
        <i class="fa fa-inbox" style="line-height: 50px;"></i>
        <span>Chat</span>
      </a>
    </li>
    <li data-content="2" class="unread">
      <a href="timeline.html">
        <i class="fa fa-inbox" style="line-height: 50px;"></i>
        <span>Timeline</span>
      </a>
    </li>
    <li>
      <a href="고객센터.html">
        <i class="fas fa-inbox" style="line-height: 50px;"></i>
        <span>Contack Us</span> 
      </a>
  </ul>
</nav>



<center>
  <a href="./main_page.php"><img src="./img/logo.png" width="200px" style="margin-top: 90px;margin-bottom: 30px;"></a>
</center>

<div style="background-color: lightgray; height: 2px;margin-top: 20px;"></div>

<section>
	<img src="./img/ocean.jpg" height="380px" class="join_image">
	<form method="POST" action="./join_back.php">
	<table class="join_section"> 
		<tr>
			<td style="background-color:#9CC4DF; color: white;">이메일</td>
			<td style="float: right;"><input type="text" name="email" size="40" style="height: 45px;font-size: 25px;margin-top: 10px; "></td>
		</tr>
		<tr>
			<td style="background-color:#9CC4DF; color: white">비밀번호</td>
			<td style="float: right;"><input type="password" name="password" size="41" style="height: 45px;font-size: 25px;margin-top: 10px;"></td>
		</tr>
		<tr>
			<td style="background-color:#9CC4DF; color: white">이름</td>
			<td style="float: right;"><input type="text" name="username" size="40" style="height: 45px;font-size: 25px;margin-top: 10px;"></td>
		</tr>
		<tr>
			<td style="background-color:#9CC4DF; color: white">성별</td>
			<td style="float: center;">
				<input type="radio" name="chk_info" value="woman" style="width:20px;height:20px;border:1px">여자
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type="radio" name="chk_info" value="man" style="width:20px;height:20px;border:1px;">남자
			</td>
		</tr>
		<tr>
			<td style="background-color:#9CC4DF; color: white">나이</td>
			<td style="float: right;"><input type="text" name="age" size="40" style="height: 45px;font-size: 25px;margin-top: 10px;"></td>
		</tr>
	</table>

</section>
<div style="background-color: lightgray; height: 2px;margin-top: 40px;"></div>
<input type="submit" value="회원가입" class="submit_join"> 
</form>
</body>
</html>