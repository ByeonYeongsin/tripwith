 <?php
session_start();
            if(!isset($_SESSION['email'])) {

                echo "<script>alert('로그인이 필요한 서비스 입니다!'); $(location).attr('href', 'Login.php');</script>";
               
            }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title>Chat</title>
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


#wrapper { 
  width: 950px; 
  margin: 15px auto; 
  text-align: left; 
}

#mate_button {
  border:1px solid #1589FF;
  background-color: #1589FF;
  border-radius: 5px;
  color:white;
  padding:10px;
    margin-left: 700px;
}
#mate_search{
  background-color: #E5E4E2;
  padding:15px;
  border-radius: 5px
}
#mate_label{
  display: inline-block;
  background-color: #3EA99F;
  margin-bottom: 10px;
  padding-left:20px;
  padding-right: 20px;
  border-radius: 5px
}
.c_button {
    border:0px;
    background-color: #FFFFFF;
    width: 950px;
}
.mate_box{
  padding:15px;
  border:1px solid #B6B6B4;
  height: 80px;


}
.chat_label{
  margin-left: 300px;
  display: inline-block;
  background-color: #3EA99F;
  margin-bottom: 10px;
  padding-left:20px;
  padding-right: 20px;
  border-radius: 5px
}

.chat_label{
  margin-left: 300px;
  display: inline-block;
  background-color: #3EA99F;
  margin-bottom: 10px;
  padding-left:20px;
  padding-right: 20px;
  border-radius: 5px
}

.time{
  margin-right: -1000px;
  margin-top: 0px;
}
button {
    border:1px;
    background-color: #FFFFFF;

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

<div>
  <i class="fa fa-comments fa-3x" style='font-family: FontAwesome;'></i> &nbsp;
  <font size = "6em"><strong>Chat</strong></font>
</div>


<?php 

    $mysqli = new mysqli('localhost', 'root', '1234', 'tripwith');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
      
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }

    $email=$_SESSION['email'];
    //$email = "ddd@ddd.ddd";
    $mateno_sql = "select mate_no from mate_member where email='$email'"; //참여중인 mate_no을 가져오기
    $mateno = mysqli_query($mysqli, $mateno_sql);

    if(mysqli_num_rows($mateno)){
      while($row=mysqli_fetch_assoc($mateno)){
        $no=$row['mate_no'];
        $sql = "select * from mate where no='$no'";
        $result = mysqli_fetch_assoc(mysqli_query($mysqli, $sql));
        
?>
<form>
<div style = "line-height: 1.7em; ">
  <p class = "mate_box">
  <button type = "button" onClick = "openChat(<?php  echo $result['no']; ?>)">
  
        <img src="image/profile.png" height="60px" width="60px" border="0px" align="left">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <font size = "5em" ><strong><?php echo $result['title']; ?></strong></font>
        <div class = "time"><font size = "3em"><?php echo $result['start_date'].' '.$result['start_time'].' ~ '.$result['end_date'].' '.$result['end_time']  ?></font></div>
       
  </button>
</p>
</div>
</form>


<?php
        

      }
    }
?>

</body>
<script type="text/javascript">
function openChat(no){

window.open('Chating.php?val='+no, '-blank', 'width = 365px, height = 520px, left = 500px, top = 200px, toolbars = no, scrollbats = no');
}
</script>
</html> 
