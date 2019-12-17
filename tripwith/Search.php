<?php
$keyword = $_POST['keyword'];
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='1234';
$mysql_db='tripwith';
$mysql_port=3306;
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
if(mysqli_connect_errno()){ echo "연결실패! ".mysqli_connect_error();}
  $place = "SELECT * FROM trip_info where city_name = '$keyword'";
  $placeresult = mysqli_query($conn, $place);
  $mate = "SELECT mate.*, (select count(*) from mate_member where mate.no=mate_no) count FROM mate where city_name = '$keyword'";
  $materesult = mysqli_query($conn, $mate);
?>

<!DOCTYPE html>
<html>
<head>
  <title>TripWith : <?php echo $keyword?> 검색결과</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

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
  margin-left: 0px;
  display: flex;
  flex:1;
  justify-content: flex-start;
}

.nav_right_menu_search {
  display: flex;
  flex:1;
  justify-content: flex-end;
  padding-left: 50px;
}
#wrapper { 
  width: 1100px; 
  margin: 0px auto; 
  text-align: left; 
  padding-left:80px;
}
#main_section{
  display: block;
  margin-left: 0px;
}
#place_list{
  border:0px;
  border-color: #000000;
  width:800px;
}
.tour_image{
   display: flex;
   width:250px;
   height:180px;
   padding-left: 0px;
   padding-top: 0px;
   z-index : 1 ;
}
.button{
  background-color: #FFFFFF;
  width:260px;
  height:300px;
  border:0px;
  padding-bottom:10px;
  margin-bottom: 100px;
}
.mate_part{
  position:relative;
  width:400px;
  border:1px solid;
  left:500px;
  top:0px;
}
.mates{
  font-size: 27px;
  font-weight: bolder;
  color:#FF6600;
}
.c_button{
  color:#000000;
  border:0px;
  width:270px;
  margin-bottom: 10px;
  background-color: #CDECFA;
}
</style>
</head>

<body id="wrapper">
<!--......Header logo파트.........--> 
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


<!-- 검색결과 바 부분 (Search Result + Search) -->
<div class='nav_left_menu_container'>
  <div>
    <i class="fas fa-map-marker-alt fa-2x"></i>
    <p style="font-size: 150%; display: inline-block;">&nbsp<font size = "5em"><strong>'<?php echo $keyword ?>'</strong></font></p> 에 대한 검색결과
  </div>
</div>




<!--............여행지 정보 리스트 출력되는 부분.............-->
<div style = "margin-left: -30px; float:left; width:66%;">
<div  id = "place_list"> <!-- 왼쪽 큰 틀 -->

 <form method="get" action="Review.php">
  <?php while($placedata = mysqli_fetch_assoc($placeresult) ){  
  $trip_place =  $placedata['trip_place']; 
  $starcount = 0;
  $score = 0; 
  $reviewcount = 0;
  ?> 
  <div style = "display:inline;"> <!-- 한줄(3개) -->
   <button  name = "trip_place" class = "button" type = "POST" value="<?php echo $trip_place ?>"> 
    <div> <!-- 사진 -->
     <img class='tour_image' src= '<?php echo ''.$placedata['image'].'';?>' >
    </div>
    <div style = "text-align:left;"> <!-- 소개 -->
     <p style='font-weight:bold; text-align:left; display: inline; font-size: 17px; text-align:left; font-weight: normal; line-height:1.5em;'> 
     <?php echo ''.$placedata['country_name'].','.$placedata['city_name'].'';?></p>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <?php
        $star = "SELECT * FROM review where trip_place = '$trip_place'";
        $starresult = mysqli_query($conn, $star);
        while($stardata = mysqli_fetch_assoc($starresult)){
            $score = $score + $stardata['star_value'];
            $starcount = $starcount + 1;
            $reviewcount = $reviewcount + 1;
        }  
        $STAR = $score / $starcount;
     ?>
     <i class='fas fa-star' style='color: #FFC314; display: inline; text-align: right;'></i>
     <?php echo round($STAR, 1);?>  <!-- 소수점 첫째짜리까지만 출력 -->
     <p style='font-size: 20px; text-align:left; font-weight: bold; line-height:1.0em;'> 
     <?php echo ''.$placedata['trip_place'].'';?></p>
     <i class='fas fa-comment-dots'></i>
     <?php echo $reviewcount;?>
     <br>
     <i class='fas fa-map-marker-alt'></i>
     <?php  echo '' .$placedata['address'].''; ?>
    </div>  
   </button> 
  </div>
 <?php } ?>

</form>


</div>
</div>


<!-- mate -->
<div  style = "box-shadow: 8px 8px #CCCCCC; text-align : center; margin-left:100px;float:left; width:27%; border:1px solid; border-color: #999999">
  <div style="margin-left: 0px;margin-top:-20px; padding-left: -30px;">
    <p class = "mates"> 
    '<?php echo $keyword ?>'의 Mate들</p>
  </div>
  <div class="mate_box_part">
    <?php while($matedata = mysqli_fetch_assoc($materesult) ){  ?>  
    <button align = "left" class = "c_button" type = "button" value = "버튼" onClick = "Chat.php">
      <font size = "4em"><strong><?php  echo '&nbsp' .$matedata['title'].'';?></strong></font>
      <span id = "mate_label"><font size = "4em" color="Red"><strong><?php echo $matedata['count'].'/'.$matedata['total_member'] ?></strong></font></span>
      <br>
      <i class="far fa-calendar-alt fa-x"><?php  echo '&nbsp&nbsp' .$matedata['start_date'].','.$matedata['start_time'].'';?></i>
      <br><br/><?php  echo '&nbsp' .$matedata['memo'].'';?></p>
    </button>
    <?php } ?>
  </div>
  <br><br>
</div>

<?php mysqli_close($conn);?>
</body>
</html>