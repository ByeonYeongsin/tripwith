<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='1234';
$mysql_db='tripwith';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");

/*DB에 저장된 값을 Request의 "startDate" 라는 attribute에 담았다고 가정할 때...
<input type="text" value="${startDate}" />*/
session_start();
$mgender = $_POST['gender'];
$mtitle = $_POST['mate_name'];
$memail_writter= $_SESSION['email'];
$mcountry_name = $_POST['mate_contry'];
$mcity_name = $_POST['mate_city'];
$mstart_date = $_POST['start_date'];
$mstart_time = $_POST['start_time'];
$mend_date = $_POST['end_date'];
$mend_time = $_POST['end_time'];
$mtotal_member = $_POST['mate_number'];
$name = $_SESSION['username'];

$mage = $_POST['age'];
$mmemo = $_POST['mate_memo'];

$q = "INSERT INTO mate(title, email_writter, country_name, city_name, start_date, start_time, end_date, end_time, total_member, gender, age, memo) VALUES ('$mtitle', '$memail_writter', '$mcountry_name', '$mcity_name', '$mstart_date', '$mstart_time', '$mend_date', '$mend_time', '$mtotal_member', '$mgender', '$mage', '$mmemo');";
mysqli_query($conn, $q);
/*$qq = "select MAX(no) from mate";
$no = mysqli_query($conn, $qq);
$nno =$no->fetch_assoc();
$nno = $nno['no']; 
$add = "INSERT INTO mate_member(mate_no, email, username) values('$nno', '$memail_writter', '$name')";
mysqli_query($conn, $add);*/

$conn->close();
echo("<script>self.close()</script>");
?>

