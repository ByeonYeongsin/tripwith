<?php
  header('Content-Type: text/html; charset=utf-8');
  session_start();
    $sort = $_POST['sort'];
    $trip_place = $_POST['trip_place'];

    $mysqli = new mysqli('localhost', 'root', '1234', 'tripwith');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }

if(isset($trip_place)){
    if($sort!= ""){
      if(strcmp("$sort" , "star_value")){
        $rev = "SELECT * FROM review where trip_place like '$trip_place' order by no desc"; 
      }
      else{
        $rev = "SELECT * FROM review where trip_place like '$trip_place' order by star_value desc"; 
      }
      $result = mysqli_query($mysqli, $rev);

      $data=array();
      if(mysqli_num_rows($result)){
        while($row=mysqli_fetch_assoc($result)){
          array_push($data,$row);
        }
        print json_encode($data); 
      }
    }
    else{
      echo "-1";
    }

}
else{
  echo "0";
}

?>
