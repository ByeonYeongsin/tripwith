<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title>TRIPWITH</title>
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
#logo{width:200px; height:150px; display: block; margin-right: auto; margin-left: auto;}



body{
  background-image: url('./image/city6.png');
  background-position: 100% 16px;
  background-position: right bottom;
  background-repeat:no-repeat;
  background-attachment: fixed;
  background-size: 1536px 480px;
  background-position: top;
/*  background-color: #D9E5FF;*/
/*  width: 950px; 
  margin: 15px auto; 
  text-align: left; */
}

/*#wrapper { 
  width: 950px; 
  margin: 15px auto; 
  text-align: left; 
}*/

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
  background: url("image/city.png");
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
  margin: 0px 0px;
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
/*  margin-left: 300px;
  margin-top: 100px;*/
}
#title{
  display: block;
  margin-top: 30px;
  padding-bottom: 0px;
  font-size:35px;
  margin-left:50px;
  color: white;
  padding-top:13px;
}
#title_back{
    background-color: rgba(0,0,0,0.6);
    width:750px;
    height:85px;
    margin-left:412px;
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
 margin-top: -162px;
 margin-left: 1065px;
 height: 47px;
 width: 45px;
 color: #ffffff; 
 background:#ffffff; 
 font-size:1.5em;
 border: none;
}
#button_image{
  height:20px;
  width:20px;
}
#main_input{
  height:45px;
  width:594px;
  margin-left:472px;
  margin-top:-100px;
}
#reco{
  display: block;
  margin-top: 280px;
  margin-bottom:10px;
  padding-bottom: 0px;
  font-size:20px;
  margin-left:300px;
  color: black;
}
#main_1{
  margin-left: 0px;
  margin-right:-0px;
  text-decoration: none;
  text-align: center;
  float:left;
}
.main_2{
  margin-right:-10px;
  text-decoration: none;
}
</style>

<body>
  <?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='1234';
$mysql_db='tripwith';
$mysql_port=3306;
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

$select_query = "SELECT DISTINCT trip_place FROM review ORDER BY star_value DESC limit 4";
$result_set = mysqli_query($conn, $select_query);
?>
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

<div style="position:absolute; width:200px; height:150px; top:10px; left:100;" >
<!--   <a href="Main.php"><img src = "image/logo.png" width="200px" style="margin-left: 700px;margin-top: 30px;"></a> -->
</div>

<form method="POST" action="Search.php">
  
    <input id = "main_input" type="text" class="search_box" size="40" name="keyword"> 
    <div id = "title_back">
    <span id="title"><b>TRIPWITH CHANGES YOUR TRAVEL</b></span>
     </div>
    <button type="submit" class="inbutton" value="입력"><img id = "button_image" src = "image/main_search.png"></button>
    <span id="reco"><b>인기있는 여행지</b></span>
    <?php echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';?>
</form>

<div style = "margin-left: 230px; margin-top: -20px">
  <form method="get" action="Review.php">
<?php
        while( $row = mysqli_fetch_array($result_set)){
        $trip_pl = $row['trip_place'];    /*trip_place 이름*/
        $star = "SELECT * FROM trip_info where trip_place = '$trip_pl'";
        $starresult = mysqli_query($conn, $star);?>
        <?php while( $data = mysqli_fetch_array($starresult)){ ?>  <!-- 사진 정보 -->
        <div id = "main_1">
  <!--      <a href="Review.php?trip_place="+"<?php echo $data['trip_place']; ?>"> -->
        <button style="border: 0px;" type = "button" onClick = "openReview('<?php  echo $data['trip_place']; ?>')">
        <?php echo '<img src='.$data['image'].' width=280 height=170>';?>  <!-- 사진 출력 -->
        <br>
        
        <?php echo ''.$data['trip_place'].'';  $trip_place = $data['trip_place'];?>
        </div>
        <?php
        }
      }
      
      ?>  </button>
</form>
</div>
<?php
  mysqli_close($conn);
  ?>
</body>
<script type="text/javascript">
function openReview(keyword){
location.href="Review.php?trip_place="+keyword;
return true;
}
</script>
</html> 