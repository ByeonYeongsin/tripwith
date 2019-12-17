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
/*
  $info = "SELECT * FROM trip_info where trip_place like '%구시가%'";
  $result = mysqli_query($conn, $info);*/
  $rev = "SELECT * FROM review where trip_place like '%구시가%'";
  $revresult = mysqli_query($conn, $rev);

  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <style>
    .review_show{
      width = "900px";
      height = "300px";
      border = "3px";
      background-color: "yellow";
    }
</head>
<body>



<?php while($revdata = mysqli_fetch_Array($revresult)){ 
  $trip_place =  $revdate['trip_place']; 
  $username_num = 0;
  $stat_value_num = 0;
  ?>


<?php echo ''.$revdate['trip_place'].'에 대한 리뷰';?>
<div class = "reveiw_show">
      <?php echo ''.$revdate['username'].'';?>
      <?php echo ''.$revdate['review'].'';?>
      <?$username_num = $username_num + 1;
      $star_value_num = $star_value_num + 1;?>
</div>
<?php }?>
<?php
  mysqli_close($conn);
  ?>
</body>
</html> 