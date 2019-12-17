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

  $trip_placeplace = $_GET['trip_place'];
  $info = "SELECT * FROM trip_info where trip_place like '$trip_placeplace'";
  $result = mysqli_query($conn, $info);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title>리뷰화면</title>
  <link rel = "stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

.nav_left_menu_container {
  display: flex;
  flex:1;
  justify-content: flex-start;
}


.review_main{
  display:inline-block;
  float:center;
  margin-top:0px;
  margin-right: 0;
  text-align: left;
  font-family: 'Jeju Gothic', sans-serif;
  font-size: 15px;
  
}

#wrapper { 
  width: 950px; 
  margin: 15px auto; 
  text-align: left; 
}
.textinput{
  width:800px;
  height:100px;
  font-size:10px;
}
.review_write{
  border:1px solid;
  height:140px;
  padding: 10px;
  margin-top:30px;
  background: lightgray;
}
.review_written{
  border:0px solid;
  height:150px;
  padding:10px;
  margin-top:10px;
}
.review{
  border:0px solid;
  height:50px;
  margin-top:20px;
}
select{
  height: 30px;
  font-size: 1em;
}
/*#map{
  margin-left : 550px;
  margin-top:0px
  border:1px solid;
}
*/
.button{
  background-color: #3366CC;
  color:white;
  width:120px;
  height:70px;
  border:0px;
  font-size: 25px;
  margin-left:-7px;
}
#sort_button{
  border:2px solid;
  border-color: #3366CC;
  margin-top: -5px;
  padding-top:10px;
  margin-left: -1px;
  width:160px;
  height: 75px;
}
#sort_button2{
  width:160px;
  height: 75px;
  background-color: #3366CC;
  margin-left:160px;
  border:0px solid;
  margin-top: 200px;
}
</style>
</head>
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


<div class='nav_left_menu_container'>
  <h1><i style = "font-size: 1em" class="fas fa-map-marker-alt fa-2x"></i>&nbsp<?php echo $trip_placeplace ?></h1>
</div>

<section>
<div style = "display:inline;"class='review_main'>
<?php
while($data = mysqli_fetch_Array($result)){  ?>
 <?php
    echo '<img src='.$data['image'].' width=600 height=600><br>';
?> 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
<div style = "display:inline;float:left;width:300px; border:0px solid; margin-top:-620px; margin-left:630px; background-color: #DDDDDD; border-radius:10px;padding:20px;width:320px;height:210px;" id = "map"> 
   <?php echo '<br><br><br><p style = "font-size:1.2em;">' .$data[ 'address' ].'</p>';?>
</div>
  

<div style = "clear:both"></div>
<div style = "border:2px solid; background-color: #FFFFFF; border-radius:10px;padding:20px; width:320px;height:280px; margin-top:-350px; margin-left:630px;">
 <p style = " font-family: 'Jeju Gothic', sans-serif;"></p>
 <?php
    echo '<br><br><p style = "font-size:1.3em">' .$data[ 'info' ]. '</p>';
  }  
?>
</div>

</div>
<div style = "clear:both"></div>
</section>
<br><br>

<hr style = "width:950px;border:solid 2px #999999;">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
 <script type="text/javascript" language="javascript">
        function checkLogin(){
          /* onfocus 이벤트 */
            $.post(

          'Auth.php',

          function(data){

            if(data == 0){   

              alert("로그인이 필요한 서비스 입니다!");

              $(location).attr('href', 'Login.php');

            }          }
        );
}
      </script>


<!-- Review 작성 부분 및 출력 -->
<section>
<br>
<img src="image/pencil.png" weight="20px" height="20px">
&nbsp<font size = "6em"><strong>'<?php echo $trip_placeplace ?>'에 대한 리뷰</strong></font>
<font size="4.5em">
<div class = "review_write">


  <form method="post" action="Review_back.php">
  <select name = "star_value" style = 'display:inline'>
    <option value="">별점선택</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br>
<!-- 리뷰 입력 칸 -->
  <input type="hidden" name ="trip_place" value="<?php echo $trip_placeplace ?>">
  <input class = "textinput" name = "review" type = "text" placeholder="리뷰를 입력해주세요." style="font-size:1em;padding-left :5px" onfocus="checkLogin()">
  <input type="submit" name = "review_submit" style="color: #fff; padding-bottom: 10px; background:#3366CC; width:100px; height:100px;font-size:1.5em; border: 0px" value="입력">
  </form>

</div>


<!-- 리뷰 나열 -->

<form>
<div class="review">
<select name="sort" style = "width:150px;height: 75px;border-top: 3px solid;border-left: 3px solid; border-bottom:0px solid;border-right: 3px solid;border-top-color: #3366CC;font-size:20px;border-left-color: #3366CC;border-right-color: #3366CC;border-top-right-radius: 8px;border-top-left-radius: 12px;">
          <option value='' selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;정렬</option>
          <option value="no">최신순</option>
          <option value="star_value">별점순</option>
        </select>
        <input style = "width:150px;height:71px;background-color: #3366CC; border-top: 0px solid;border-left:0px solid; border-right: 0px solid;margin-left: -7px;color:white; font-size:20px;margin-top:-1px;border-top-right-radius: 12px;border-top-left-radius: 8px;"type="button" value="보기" id="sort_button"/>
</font><br><br>
</div>
</form>
<br>
<div style = "margin-top:0px;border:3px solid; border-color: #3366CC; padding:40px;">
<section id="sorted_list">

<?php
  /*리뷰 출력 부분*/
  $rev = "SELECT * FROM review where trip_place like '$trip_placeplace' order by no desc";  /*default 최신순 정렬*/
  $revresult = mysqli_query($conn, $rev);
  while($revdata = mysqli_fetch_Array($revresult)){?>
<div id="review_list">
    <br><br>
      <?php echo '<strong>'.$revdata['username'].' 님의 리뷰</strong>';?>
      <br>
      <div style = 'margin-left:800px; margin-top:-20px;'>
      <i class='fas fa-star' style='color: #FFC314; display: inline; text-align: right;'></i>&nbsp&nbsp
      <?php echo $revdata['star_value'];?>
    </div>
      <br><?php echo $revdata['review'];?>
      <br><br><br><hr style = 'width = 700px; border = 3px; border-color:#3366CC'></hr>
</div>
<?php }?> 

<!-- <div><br><br><strong>"+reviewList[i].username+" 님의 리뷰 <br></strong> <div style = 'margin-left:800px; margin-top:-20px;'><i class='fas fa-star' style='color: #FFC314;  display: inline; text-align: left;'></i>&nbsp&nbsp" +reviewList[i].star_value+"</div><br>"+reviewList[i].review+"<br><br><br><hr style = 'width = 700px; border = 3px; border-color:#3366CC'></hr></div>  -->
</section>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
var trip_place = "<?php echo $trip_placeplace ?>";
var reviewList;
    $('#sort_button').click(function(){
      var sort= $('select[name=sort]').val();

      $('#sort_button').prop('disabled',true);
      if(sort==''){
        alert("정렬 기준을 선택해주세요!");
        $('#sort_button').prop('disabled',false);
      }
      else{
        $.post(
          'Review_sorting.php',{sort:sort, trip_place:trip_place},
          function(data){
            reviewList=JSON.parse(data);      
            $('#sorted_list').empty();
            if(data == "-1") alert("해당하는 MATE가 없습니다!");
            else if (data == "0") alert("error");
            else{
              for(var i=0; i< reviewList.length; i++){
                 var item;
                 item ="<div><br><br><strong>"+reviewList[i].username+" 님의 리뷰 <br></strong> <div style = 'margin-left:800px; margin-top:-20px;'><i class='fas fa-star' style='color: #FFC314;  display: inline; text-align: left;'></i>&nbsp&nbsp&nbsp" +reviewList[i].star_value+"</div><br>"+reviewList[i].review+"<br><br><br><hr style = 'width = 700px; border = 3px; border-color:#3366CC'></hr></div>";
                $('#sorted_list').append(item);
              }
             
            }  
             $('#sort_button').prop('disabled', false);
          }
        );
      }
    });
</script>









<!--..........리뷰 리스트 출력 ..................-->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
  var searchList;
      function review_score(){
          $.post(
            'Review_score.php',{region:region,gender:gender,age:age},
            function(data){
              searchList=JSON.parse(data);
                for(var i=0; i< searchList.length; i++){
                   var review;
                   review =searchList[i].username+" 님의 리뷰"+"<br><i class='fas fa-star' style='color: #FFC314; display: inline; text-align: right;'></i>"+searchList[i].star_value+
                         "<br>"+searchList[i].review;
                  $('#print_review').append(review);
                }
            }
          );
        };

          function review_recent(){
          $.post(
            'Review_recent.php',{region:region,gender:gender,age:age},
            function(data){
              searchList=JSON.parse(data);
                for(var i=0; i< searchList.length; i++){
                   var review;
                   review =searchList[i].username+" 님의 리뷰"+"<br><i class='fas fa-star' style='color: #FFC314; display: inline; text-align: right;'></i>"+searchList[i].star_value+
                         "<br>"+searchList[i].review;
                  $('#print_review').append(review);
                }
            }
          );
        };
</script>  -->

</div>
</section>
<?php
  mysqli_close($conn);
  ?>
</body>
</html> 