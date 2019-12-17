<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Mate</title>
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
.mate_box{
  padding:15px;
  border:1px solid #B6B6B4;
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
<div >
  <i class="fa fa-users fa-2x" ></i> &nbsp;
  <font size = "6em"><strong>Mate</strong></font>
 <!-- <button  id = "mate_button" type = "button" value = "버튼" onClick = "window.open('Mate_add.php', '-blank', 'width = 500px, height = 300px, left = 500px, top = 200px, toolbars = no, scrollbats = no');">Mate 만들기</button> -->
<!--   <form method="get" action="Mate_add.php"> -->
    <button  id = "mate_button" type = "button" value = "버튼" >Mate 만들기</button>
  </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
$('#mate_button').click(function(){
  $.post(
          'Auth.php',
          function(data){
            if(data == 0){   
              alert("로그인이 필요한 서비스 입니다!");
              $(location).attr('href', 'Login.php');
            }
            else{
              window.open('Mate_add.php', '-blank', 'width = 450px, height = 410px, left = 500px, top = 200px, toolbars = no, scrollbats = no');
            }
          }
        );
});
</script>
<form>
<p id = "mate_search">
        
        <strong>지역</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="region">
        <br>
        <strong>성별 </strong> &nbsp;&nbsp;&nbsp;&nbsp;
        <select name="gender">
          <option value='' selected>--option--</option>
          <option value="mixed">혼성</option>
          <option value="woman">여자</option>
          <option value="man">남자</option>
        </select>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>연령 </strong> &nbsp;&nbsp;
        <select name="age">
          <option value='' selected>--option--</option>
          <option value="10">10대</option>
          <option value="20">20대</option>
          <option value="30">30대</option>
          <option value="40">40대</option>
          <option value="50">50대</option>
          <option value="60">60대</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;<input style = "background-color: #3366CC;border:0px;color:white;width:70px;border-radius:3px;height: 30px; margin-left:450px;"type="button" value="검색" id="search"/>
        <br>
</p>
</form>
<section id="searched_mate">
</section>
 

<!--..........검색 리스트 출력 ..................-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>

<script>
var searchList;
    $('#search').click(function(){
      var region= $('#region').val();
      //console.log(region);
      var gender= $('select[name=gender]').val();
      var age= $('select[name=age]').val();
      $('#search').prop('disabled',true);
      if(region==''){
        alert("지역명을 입력해주세요!");
        $('#search').prop('disabled',false);
      }
      else{
        $.post(
          'Mate_back.php',{region:region,gender:gender,age:age},
          function(data){
            searchList=JSON.parse(data);
            $('#searched_mate').empty();
            if(data == "-1") alert("해당하는 MATE가 없습니다!");
            else{
              for(var i=searchList.length-1; i>=0; i--){
                 var item;
                 item ="<div style = 'line-height: 1.7em;'><button align = 'left' class = 'c_button' type = 'button' value = '버튼'>      <p class = 'mate_box' align='left'>            &nbsp;&nbsp;&nbsp;      <font size = '5em'><strong>"+ searchList[i].title+"</strong></font>      &nbsp;      <span id = 'mate_label'><font size = '4em' color='white'><strong>"+searchList[i].count+"/"+searchList[i].total_member+"</strong></font></span>      <br>      &nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-calendar fa-x' style='font-family: FontAwesome;''></i> "+searchList[i].start_date+", "+searchList[i].start_time+" ~ "+searchList[i].end_date+", "+searchList[i].end_time+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <i class='fa fa-user fa-x'></i> "+searchList[i].gender+"/"+searchList[i].age+"대      <br>      &nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-pencil'></i> "+searchList[i].memo+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </p>    </button></div>";
                item = "<a href=\'javascript:openPop("+searchList[i].no+")\'>" + item + "</a>";
                $('#searched_mate').append(item);
              }
             
            }
             $('#search').prop('disabled', false);
          }
        );
      }
    });

    function openPop(no){
      var con_check = confirm("Mate에 참여하시겠습니까?");
      if(con_check == true){
         $.post(
          'Mate_insert.php',{no:no},
          function(check){
            console.log(check);
            if(check=="1") alert("Mate에서 요구하는 성별 조건에 해당하지 않습니다!");
            else if(check=="2") alert("Mate에서 요구하는 나이 조건에 해당하지 않습니다!");
            else if(check =="-1") console.log("Insert Error");
            else if(check=="0") console.log("Post Error");
            else
              alert("Mate 참여 완료! Chat메뉴에서 확인 가능합니다.")
          });
      }
      else if(con_check == false){
        
      }
     // window.open('Mate_insert.php?val='+no, '-blank', 'width = 500px, height = 400px, left = 500px, top = 200px, toolbars = no, scrollbats = no');
    }
</script>


</body>
</html> 