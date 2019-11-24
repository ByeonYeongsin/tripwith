
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<title>tripwith : 로그인</title>
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




.login_box{
  border-top: solid 1px lightgray;
  border-bottom: solid 1px lightgray;
  height: 240px;
}
.email{
  height: 40px;
  width: 300px;
}
.email_b1{
  height: 40px;
  width: 300px;
  position:absolute;
  left:-120px;
  top:15px;
  font-size: 15px;
}
.email_b2{
  height: 40px;
  width: 295px;

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
  left:-112px;
  top:15px;
  font-size: 15px;
}
.password_b2{
  height: 40px;
  width: 295px;
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

}
.login_button{
  margin-top: 25px;
  width: 200px;
  height: 40px;
  font-size: 30px;
  background-color: #9CC4DF;
  border:solid 1px black;
  margin-left: -100px;
}
.join_button{
  display: flex;
  margin-top: 25px;
  width: 90px;
  height: 40px;
  font-size: 30px;
  margin-left: 205px;
  margin-top: -40px;
  background-color: #lightgray;
  border:solid 1px black;
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
  <img src="./img/logo.png" width="200px" style="margin-top: 150px;margin-bottom: 30px;">
  <br/>
  <div>
    <p><a href='main_page.php'>이전화면으로 돌아가기</a></p>
  </div>
  <div class="login_box">
        <form method="POST" action="./login_page_back.php">
          <h1>Sign In With Email/Password</h1><br/>
          <div style="position:relative;" class="email" >
            <label for="ex4-email-input" class="email_b1">이메일</label>
            <input type="text" class="email_b2"  value="" id="ex4-email-input" name="email" />
          </div>
          <div style="position:relative;" class="password" >
            <label for="ex4-pw-input" class="password_b1">비밀번호</label>
            <input type="password" class="password_b2"  value="" id="ex4-pw-input" name="password" />
          </div>

          <input type="submit" value="login" class="login_button">
      </form>
      <input type="button" class="join_button" value="Join" onclick="location.href='./join.php'">
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
</html>
