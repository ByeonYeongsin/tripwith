
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <title>Mate</title>
  <link rel = "stylesheet">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>  
<style type="text/css">
#c_button{
  height:50px;
  width:100%;
  background-color: #1589FF;
  border:none;
  margin-bottom: 0px;
  color:white;
  font-size: 20px;
}
body { text-align: center; }
*{ box-sizing: border-box;
   font-family: 'NanumGothic, sans-serif';
 }
.wrapper {
  text-align: left;
  width:120px;
  height: 30px;
  margin: 0px;
}

/*출발일글씨*/
.datepicker {
    border: 1px solid #c6e2f7;
    border-radius: 5px;
    width: 130px;
    height: 100%;
    font-size: 15px;
    margin-left:80px;
    text-align: center;
    cursor: pointer;
}
/*출발일에 마우스 갖다댔을 때*/
.datepicker:hover {
    background-color: #eaf7ff;
}
.datepicker:focus {
    outline: none;
}
    /* calendar table */
.ui-datepicker {
    display: none;
    background-color: #fff;
    border-radius: 0px;
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    padding: 0px;
    width: 250px;
}
.datepicker:focus>.ui-datepicker {
    display: block;
}
.ui-datepicker-prev,
.ui-datepicker-next {
    cursor: pointer;
}
.ui-datepicker-next {
    float: right;
}
.ui-state-disabled {
    cursor: auto;
    color: hsla(0, 0%, 80%, 1);
}
/*2019년12월*/
.ui-datepicker-title {
    display: inline-flex;
    text-align: left;
    padding: 1px;
    font-weight: 100;
    font-size: 13px;
    width:180px;
    height: 30px;
}
.ui-datepicker-calendar {
    width: 100%;
}
    /* day of week cell */
.ui-datepicker-calendar>thead>tr>th {
    padding: 2px;
    font-size: 10px;
    font-weight: 400;
}
/* day cell */
.ui-datepicker-calendar>tbody>tr>td {
  border-radius: 100%;
  width: 6px;
  height: 5px;
  cursor: pointer;
  padding: 3px;
  font-weight: 100;
  text-align: center;
}
.ui-datepicker-calendar>tbody>tr>td:hover {
    background-color: #c6e2f7;
}
.ui-datepicker-calendar>tbody>tr>td>a {
    color: #000;
    font-size: 12px;
    font-weight: 400;
    text-decoration: none;
}
/* past days */
.ui-datepicker-calendar>tbody>tr>.ui-state-disabled:hover {
    cursor: auto;
    background-color: #fff;
}
/* media */
@media(max-width: 445px) {
.wrapper {
  width: calc(100vw - 10px);
}
.ui-datepicker {
    margin-right: 0;
    margin-left: 0;
    padding: 5px;
    width: calc(100vw - 10px);
    margin: 5px auto;
}
.ui-datepicker-calendar>tbody>tr>td {
    width: 10px;
    height: 10px;
}
</style>
</head>
<body>
<div style = "line-height: 2.0em">
    <form method="post" action="Mate_add_back.php">
   <p>
        <strong>Mate 이름</strong>&nbsp;&nbsp;&nbsp;&nbsp;<input = "text" name = "mate_name" style = "width : 200px">
        <br>
        <strong>국가</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input = "text" name = "mate_contry" style = "width : 200px">
        <br>
        <strong>도시</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input = "text" name = "mate_city" style = "width : 200px">
        <br>

        <div class = "wrapper" style = "float: left;">
          <input type="text" id="start_date" name = "start_date" placeholder="출발일" style = "width:130px; margin-left: 70px;" />
        </div>
        <div style = "float:left;  margin-left:90px;">
        <input type = "time" value="00:00:00" name = "start_time"></div>
        <br><div style = "float:left; margin-left: 110px">~</div>
        <div class = "wrapper" style = "float:left; margin-left: 7px">
          <input type="text" id="end_date" name = "end_date" placeholder="도착일" style = "width:130px;" />
        </div>
        <div style = "float:left; margin-left:20px;">
        <input type = "time" value="00:00:00" name = "end_time"></div>
        <br>
        <strong>인원수</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input = "text" style = "width : 200px" name = "mate_number">
        <br>
        <strong>성별 </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select style = "width : 200px" name="gender">
            <option value='' selected>--option--</option>
            <option value="mixed">혼성</option>
            <option value="woman">여자</option>
            <option value="man">남자</option>
          </select>
        <br>
        <strong>연령 </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select style = "width : 200px" name="age">
           <option value='' selected>--option--</option>
            <option value="10">10대</option>
            <option value="20">20대</option>
            <option value="30">30대</option>
            <option value="40">40대</option>
            <option value="50">50대</option>
            <option value="60">60대</option>
          </select>
        <br>
        <strong>한 줄 소개</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input = "text" style = "width : 200px" name = "mate_memo">
        <br><br>
      <input align = "left" id = "c_button" type="submit" name = "submit" value = "mate만들기" name="mate_submit">

        <br>
      </p>
  </form>
  </div>
     
<script>
    $(function(){
      $("#start_date").datepicker({
        closeText: "닫기",
        prevText: "이전달",
        nextText: "다음달",
        currentText: "오늘",
        monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
        monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
        dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
        dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
        weekHeader: "주",
        changeMonth:true,
        changeYear: true,
        firstDay: 0,
        minDate: 0,
        dateFormat:"yy-mm-dd",
        isRTL: false,
        showMonthAfterYear: true,
        yearSuffix: "년"
      });
    });
    $(function(){
      $("#end_date").datepicker({
        closeText: "닫기",
        prevText: "이전달",
        nextText: "다음달",
        currentText: "오늘",
        monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
        monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
        dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
        dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
        weekHeader: "주",
        changeMonth:true,
        changeYear: true,
        firstDay: 0,
        minDate: 0,
        dateFormat:"yy-mm-dd",
        isRTL: false,
        showMonthAfterYear: true,
        yearSuffix: "년"
      });
    });


</script>
</body>
</html>
