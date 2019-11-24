<?php
$keyword = $_POST['keyword'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>TripWith : <?php echo $keyword?> 검색결과</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>
<style>
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







html, body {
  margin: 0;
  padding: 0;
}
p {
  margin: 0;
  padding: 0;
}
header {
  position: fixed;
  height: 100px;
  padding-top: 20px;
  top:0;
  left:0;
  width: 100%;
  background-color: white;
}
.nav_bar {
  display: flex;
  background-color: white;
  margin-bottom: 10px;
}
.menu{
  background-color: white;
}
.wrapper { 
		display: flex;
		flex:1;
		margin-top: 150px;
		margin-left: 70px;
        width: 1300px;  
        text-align: left; 
}

.header_logo_container {
  text-align: center;
  flex: 1;
  justify-content: center;
}
.header_account_container{
  flex: 1;
  text-align: right;
  justify-content: flex-end;
   padding-right: 50px;
}
.nav_left_menu_container {
	display: flex;
  flex:1;
  justify-content: flex-start;
  padding-left: 80px;
}
.nav_right_menu_search {
	display: flex;
  flex:1;
  justify-content: flex-end;
  padding-right: 50px;
}

.main_section{
	display: block;
}
.tour_part { 
	display: flex; 
	flex:1;
	width: 750px; 
	height: 145px;
	margin-left: 40px; 
	background-color: #E5E8E8;
} 
.tour_image{
	display: flex;

	padding-left: 12px;
	padding-top: 12.5px;
}
.tour_name{
	display: flex;
	height: 30px;
	justify-content: flex-start;
	margin-left: 15px;
	padding-top: 27.5px;
	padding-right: 30px;
}
.tour_review{
	display: flex;
	flex:1;
	float: left;
	height: 20px;
	margin-left: -330px;
	margin-top: 70px;
}
.tour_location{
	display: flex;
	flex:1;
	float: left; 
	justify-content: flex-start;
	font-size: 15px;
	height: 20px;
	margin-left: -420px;
	margin-top: 110px;
}



.chat_section{
	display: block;
}
.chat_part{
	display: flex; 
	flex:1;
	width: 470px; 
	height: 340px;	
	margin-left: 50px;
	margin-top: 20px;
	background-color: #E5E8E8;
	overflow:scroll;
}
.chatting_box_part{
	display: block;
	width: 470px;
	margin-top: 70px;
	margin-left: -140px;
	margin-right: 30px;
}
.chatting_box{
	display: flex;
	flex:1;
	width: 410px;
	height: 50px;
	background-color:#9CC4DF;
	margin-bottom: 5px;
}
.message{
	margin-top: 10px;
	margin-left: 10px;

	height: 20px;
	justify-content: flex-start;
}
.message_time{
	flex-direction:row-reverse;
	display: flex;
	flex:1;
	margin-top: 27px;
	justify-content: flex-start;
	height: 20px;
}



.mate_section{
	display: block;
	margin-top: 375px;
	margin-left: -520px;
}
.mate_part{
	display: flex; 
	flex:1;
	width: 470px; 
	height: 400px;	
	margin-left: 50px;
	background-color: #E5E8E8;
	overflow:scroll;
}
.mate_box_part{
	display: block;
	width: 470px;
	margin-top: 70px;
	margin-left: -80px;
	margin-right: 30px;
}
.mate_box{
	display: flex;
	flex:1;
	width: 410px;
	height: 70px;
	background-color: #9CC4DF;
	margin-bottom: 5px;
}
.mate_title{
	display: inline-block;
	margin-top: 10px;
	margin-left: 10px;
	height: 25px;
	font-size: 120%;
	justify-content: flex-start;
}
.schedule{
	font-size: 95%;
	margin-left: 5px;
	margin-top: 5px;
	display: inline-block;
}
.mate_confi{
	text-align: center;
	font-size: 90%;
	color: white;
	margin-left: 310px;
	margin-right: 20px;
	margin-top: -25px;
	background-color: #28CEAD;
	border: solid 1px white;
}
</style>
<body>


<!--......Header 파트.........-->	
<header>
	<nav class="menu">	
<!-- 메뉴 추후에 수정 -->
		<div class='header_logo_container'>
			<div style="display: inline-block;">
				<a href="./main_page.php"><img class="logo" src="./img/logo.png" width="200" style="display: inline-block;"></a>
			</div>
		</div>
	</nav>
<!-- nav 바 부분 (Search Result + Search) -->
	<nav class="nav_bar">
  	    <div class='nav_left_menu_container'>
    	    <div>
    	    	<i class="fas fa-map-marker-alt fa-2x"></i>
    	    	<p style="font-size: 150%; display: inline-block;">'<?php echo $keyword ?>'</p>에 대한 검색결과 
    	    </div>
    	</div>

	    <div class='nav_right_menu_search'>
    	    <div style="display: inline-block;">
          		<input class='aside_search_input' type="text" style="line-height: 25px; display: inline-block;" size="30"></input>
          		<button style="height: 30px; border: gray;"><i class="fas fa-search fa-x"></i></button>
    	    </div>
     	</div>
    </nav>
</header>


<!--............여행지 정보 리스트 출력되는 부분.............-->
<div class="wrapper">
<section class="main_section">
	<!--..................여행지에 대한 정보 section.......... -->
<br/>
    <article class="tour_part">

     <div>
     	<img class="tour_image" src="https://media-cdn.tripadvisor.com/media/photo-f/0d/88/ad/7a/img-20161028-163214-hdr.jpg" width="160">
     </div>

     <div class="tour_name">
     	<p style="font-size: 30px;width: 300px;">흥부엉 거리</p>
     </div>
     <div style="clear:both;"></div>

     <div class="tour_review">
     	<i class="fas fa-star" style="color: #FFC314;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px; margin-left: 1.5px;">4.4&nbsp&nbsp</p>
     	<i class="fas fa-comment-dots"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">1281&nbsp</p>
     	<i class="fas fa-heart" style="color: red;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">312&nbsp&nbsp</p>
     </div>
     <div style="clear:both;"></div>
     
     <div class="tour_location">
     	<i class="fas fa-map-marker-alt">Hoa Hai, Ngu Hanh Son, Da Nang 550000, Vietnam</i>
     </div>
     
     <i class="fas fa-heart fa-2x" style="color: red; margin-top: 10px; margin-right: 10px;" ></i>
    </article>

<br/>
    <article class="tour_part">
     <div>
     	<img class="tour_image" src="https://media-cdn.tripadvisor.com/media/photo-f/0d/88/ad/7a/img-20161028-163214-hdr.jpg" width="160">
     </div>
     <div class="tour_name" style="display: inline-block;">
     	<p style="font-size: 30px;width: 300px;">흥부엉 거리22</p>
     </div>
     <div style="clear:both;"></div>
     <div class="tour_review">
     	<i class="fas fa-star" style="color: #FFC314;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px; margin-left: 1.5px;">4.5&nbsp&nbsp</p>
     	<i class="fas fa-comment-dots"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">1282&nbsp</p>
     	<i class="fas fa-heart" style="color: red;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">31&nbsp&nbsp</p>
     </div>
     <div style="clear:both;"></div>
     <div class="tour_location">
     	<i class="fas fa-map-marker-alt" >Hoa Hai, Ngu Hanh Son, Da Nang 10000, Vietnam</i>
     </div>
     <i class="fas fa-heart fa-2x" style="color: red; margin-top: 10px; margin-right: 10px; " ></i>
    </article>
<br/>
    <article class="tour_part">
     <div>
     	<img class="tour_image" src="https://media-cdn.tripadvisor.com/media/photo-f/0d/88/ad/7a/img-20161028-163214-hdr.jpg" width="160">
     </div>
     <div class="tour_name" style="display: inline-block;">
     	<p style="font-size: 30px;width: 300px;">흥부엉 거리333</p>
     </div>
     <div style="clear:both;"></div>
     <div class="tour_review">
     	<i class="fas fa-star" style="color: #FFC314;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px; margin-left: 1.5px;">2.5&nbsp&nbsp</p>
     	<i class="fas fa-comment-dots"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">1282&nbsp</p>
     	<i class="fas fa-heart" style="color: red;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">31&nbsp&nbsp</p>
     </div>
     <div style="clear:both;"></div>
     <div class="tour_location">
     	<i class="fas fa-map-marker-alt" >Hoa Hai, Ngu Hanh Son, Da Nang 100, Vietnam</i>
     </div>
     <i class="fas fa-heart fa-2x" style="color: red; margin-top: 10px; margin-right: 10px; " ></i>
    </article>
<br/>
    <article class="tour_part">
     <div>
     	<img class="tour_image" src="https://media-cdn.tripadvisor.com/media/photo-f/0d/88/ad/7a/img-20161028-163214-hdr.jpg" width="160">
     </div>
     <div class="tour_name" style="display: inline-block;">
     	<p style="font-size: 30px;width: 300px;">흥부엉 거리4444</p>
     </div>
     <div style="clear:both;"></div>
     <div class="tour_review">
     	<i class="fas fa-star" style="color: #FFC314;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px; margin-left: 1.5px;">3.5&nbsp&nbsp</p>
     	<i class="fas fa-comment-dots"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">382&nbsp</p>
     	<i class="fas fa-heart" style="color: red;display: inline-block;"></i>
     	<p style="font-size: 14px; margin-top: -2px;margin-left: 1px;">231&nbsp&nbsp</p>
     </div>
     <div style="clear:both;"></div>
     <div class="tour_location">
     	<i class="fas fa-map-marker-alt" >Hoa Hai, Ngu Hanh Son, Da Nang 10000, Vietnam</i>
     </div>
     <i class="fas fa-heart fa-2x" style="color: red; margin-top: 10px; margin-right: 10px; " ></i>
    </article>
</section>




<!--.................실시간 정보공유 timeline 파트 ..................... -->
<section class="chat_section">
	<section class="chat_part">
		<div style="margin-left: 15px;margin-top: 5px;">
			<p style="font-size: 250%">Timeline</p>
		</div>
		<div style="clear:both;"></div>
		<div class="chatting_box_part">
			<article class="chatting_box">
				<div class="message">오늘 한시장 쌀국수집 줄 길어요ㅠ</div>
				<div style="clear:both;"></div>
				<div class="message_time">17:55</div>
			</article>
			<article class="chatting_box">
				<div class="message">오늘 한시장 쌀국수집 줄 길어요ㅠ2222</div>
				<div style="clear:both;"></div>
				<div class="message_time">17:53</div>
			</article>
		</div>
		<div style="clear:both;"></div>

		
	</section>
</section>




<!--............Mate 구하기 파트  ...................... -->
<section class="mate_section">
	<section class="mate_part">
		<div style="margin-left: 15px;margin-top: 5px;">
			<p style="font-size: 250%">Mate</p>
		</div>
		<div style="clear:both;"></div>
		<div class="mate_box_part">
			<article class="mate_box">
				<div class="mate_title">
					<b>베트남 하롱베이 투어</b>
					<p class="schedule"><i class="far fa-calendar-alt">&nbsp2019.11.24, 14:00~17:00</i></p>
					<p class="mate_confi">여 2/4</p>
				</div>
			</article>
			<article class="mate_box">
				<div class="mate_title">
					<b>베트남 하롱베이 투어2222</b>
					<p class="schedule"><i class="far fa-calendar-alt">&nbsp2019.11.23, 11:00~17:00</i></p>
					<p class="mate_confi">혼성 2/4</p>
				</div>
			</article>
		</div>
		<div style="clear:both;"></div>	
	</section>
</section>
</div>


<input type="checkbox" id="menu_state" checked>
<nav class="menu_state_part">
  <label for="menu_state"><i class="fa"></i></label>
  <ul>
    <li data-content="5" class="unread">
      <a href="로그인.html">
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
</body>
</html>