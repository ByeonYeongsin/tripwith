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

.wrapper { 
      display: flex;
      flex:1;
      margin-left: 60px;
      width: 1300px;  
      text-align: left; 
      float:left;
}

h1 { font: bold 20px verdana, sans-serif; } 
h2 { font: bold 14px verdana, sans-serif; }

body { text-align: center;
  background-image: url('https://pix6.agoda.net/geo/city/16552/1_16552_02.jpg?s=1920x822.png');
  background-position: 100% 16px;
  background-position: right bottom;
  background-repeat:no-repeat;
  background-attachment: fixed;
  background-size: 1536px 755px;
  background-position: top; }

#main_footer { clear: both; text-align: center; padding: 20px; border-top: 2px solid #999999; }

.login_box{  /*로그인 박스 전체 부분*/
  /*border-top: solid 1px lightgray;
  border-bottom: solid 1px lightgray;*/
  height: 490px;
  width: 360px;
  /*background-color: lightgray;*/
  background-color: white;
  margin-top: -50px;
}
.email{ /*로그인 이메일 박스 부분*/
  height: 40px;
  width: 300px;
  margin-left: -250px;
}
.email_b1{
  height: 40px;
  width: 300px;
  position:absolute;
  left:30px;
  top:15px;
  font-size: 15px;
}
.email_b2{
  height: 40px;
  width: 250px;

  border: solid 1px black;
  position:absolute;
  z-index:2;
  background:url('./transparent.gif') repeat 0 0 ;
}
.password_b1{
  height: 40px;
  width: 300px;
  margin-top: 7px;
  position:absolute;
  left:40px;
  top:15px;
  font-size: 15px;
}
.password_b2{
  height: 40px;
  width: 250px;
  margin-top: 7px;
  border: solid 1px black;
  position:absolute;
  z-index:2;
  background:url('./transparent.gif') repeat 0 0 ;
}
.password{
  height: 40px;
  width: 300px;
  margin-top: 7px;
  margin-left: -250px;

}
.login_button{
  margin-top: 0px;
  width: 180px;
  height: 60px;
  font-size: 18px;
  background-color: #FFAD7E;
  border:solid 1px white;
  margin-left: -180px;
  font-weight: bold;
}
.join_button{
  display: flex;
  margin-top: 0px;
  width: 180px;
  height: 60px;
  font-size: 18px;
  margin-left: 180px;
  margin-top: -60px;
  background-color: #lightgray;
  border:solid 1px white;
  text-align: center;
  font-weight: bold;
}
.login{
  margin-top: 25px;
  width: 250px;
  height: 50px;
  font-size: 18px;
  background-color: #DDDDDD;
  border:solid 0px black;
  margin-left: 0px;
  font-weight: bold;
}

</style>

<body>
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
<center>
  <br/>
  <div class="login_box">
        <form method="POST" action="Login_back.php">
          <input type="button" class="login_button" value="로그인" onclick="location.href='Login.php'">
          <input type="button" class="join_button" value="      회원가입" onclick="location.href='Join.php'">
          <br><br><br><div style = "text-align: left;"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;이메일 로그인</h1></div><br/>
          <div style="position:relative;" class="email" >
            <label for="ex4-email-input" class="email_b1">이메일</label>
            <input type="text" class="email_b2"  value="" id="ex4-email-input" name="email" />
          </div>
          <div style="position:relative;" class="password" >
            <label for="ex4-pw-input" class="password_b1">비밀번호</label>
            <input type="password" class="password_b2"  value="" id="ex4-pw-input" name="password" />
          </div>
          <br><br><br>
          <input type="submit" value="로그인" class="login">
      </form>
      
  </div>
</center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
(function cleanText($) {
        var $pw = $('#ex4-email-input, #ex4-pw-input')
        $pw.on('click focus', function () {
          $(this).siblings('label').hide()
        });
        $pw.on('blur', function () {
          $this = $(this)
          if ($.trim($this.val()).length === 0) {
            $this.siblings('label').show()
          }
        });
      })(jQuery);

</script>


</body>
</html> 