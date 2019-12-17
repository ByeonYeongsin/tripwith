<?php
session_start();

$prevPage = $_SERVER['HTTP_REFERER'];   // prevPage 변수에 이전 페이지 변수를 저장함

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='1234';
$mysql_db='tripwith';
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
?>

<?php
$memail = $_SESSION['email'];
$musername = $_SESSION['username'];
$mtrip_place = $_POST['trip_place'];
$mstar_value = $_POST['star_value'];
$mreview = $_POST['review'];

$q = "INSERT INTO review(email, username, trip_place, star_value, review) VALUES ('$memail', '$musername', '$mtrip_place', '$mstar_value', '$mreview');";
mysqli_query($conn, $q);
$conn->close();

header('location:'.$prevPage);   // 원래 페이지로 이동시킴

?>