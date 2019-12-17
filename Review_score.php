<?php
  header('Content-Type: text/html; charset=utf-8');
  session_start();
    $trip_place = $_POST['trip_place'];
    $mysqli = new mysqli('localhost', 'root', '1234', 'tripwith');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }

  $result = mysqli_query($conn, $info);
  $rev = "SELECT * FROM review where trip_place like '$trip_place' order by star_value desc";  /*별점순 정렬*/
  $revresult = mysqli_query($conn, $rev);

  $data=array();
  while($row=mysqli_fetch_assoc($revresult)){
      array_push($data,$row);
    }
      print json_encode($data); 
    mysqli_close($mysqli);
?>
