<html>
   <head>
   <meta charset="UTF-8">
   <title>TRIPWITH</title>
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








body{
  background-image: url('./img/ocean.jpg');
  background-position: 100% 16px;
  background-position: right bottom;
  background-color: #D9E5FF;
}

main {
  position: absolute;
  transition: all 0.15s ease-in-out;
  top: 0;
  left: 50px;
}
main header {
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  height: 400px;
  background: url("http://www.blueb.co.kr/SRC2/_image/01.jpg");
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
}
main section {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  background: #fff;
  padding: 25px;
  font-family: helvetica;
  font-weight: lighter;
  padding: 50px;
  margin: 150px 75px;
  transition: all 0.15s ease-in-out;
}
main section:hover {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
main section h1 {
  padding-top: 0;
  margin-top: 0;
  font-weight: lighter;
}


.input_section{
  display: flex;
  background-color: rgba(0,0,0,0.6);
  width: 1000px;
  height: 250px;
  margin-left: 450px;
  margin-top: 290px;
}
.title{
  display: block;
  margin-top: 40px;
  margin-left: 40px;
  margin-right: -800px;
  padding-bottom: -500px;
  font-size:45px;
  color: white;

}
.search_box{
  display: inline-block;
  color: gray; 
  font-size: 30px;
  height: 60px;
  width: 780px;
  border:none;
  margin-top: 120px;
  margin-left: 190px;
  margin-right: -500px;
}
.inbutton{
  display: block;
 margin-top: 120px;
 margin-left: 490px;
 margin-right: -300px;
 height: 60px;
 width: 110px;
 color: #ffffff; 
 background:#9CC4DF; 
 font-size:1.5em;
 border: none;
}

</style>


</head>
<body>


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



<div style="position:absolute; width:200px; height:150px; top:10px; left:100;" >
  <a href="./main_page.php"><img src = "./img/logo.png" width="200px" style="margin-left: 700px;margin-top: 30px;"></a>
</div>

<form method="POST" action="./search_page.php">
<section class="input_section">

  <span class="title">당신의 <b style="font-size: 60px;">여행지</b>를 알려주세요.</span>
   <div style="clear:both;"></div>
   <input type="text" value="내용을 입력해주세요" class="search_box" size="40" name="keyword">
    <div style="clear:both;"></div>
   <button type="submit" class="inbutton" value="입력">입력</button>

</section>
</form>
</body>
</html>