<?php
  header('Content-Type: text/html; charset=utf-8');
?>
<?php session_start();

    $mysqli = new mysqli('localhost', 'root', '1234', 'tripwith');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
      
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }

    if(isset($_POST['region'])){
      $region_want=$_POST['region'];
//echo "<script>console.log('$region_want')</script>";
      if(($_POST['age'] != "") && ($_POST['gender'] != "")){
        $age_want=$_POST['age'];
        //$age_want_ed=(int)$age_want + 9;
        $gender_want=$_POST['gender'];
        $sql="select mate.*, (select count(*) from mate_member where mate.no=mate_no) count from mate where city_name='$region_want' AND gender='$gender_want' AND age = '$age_want'";
        $result=mysqli_query($mysqli,$sql);
        $data=array();

        if(mysqli_num_rows($result)){
          while($row=mysqli_fetch_assoc($result)){
            array_push($data,$row);
            }
            print json_encode($data);
        }
        else{
          echo "-1";
        }
      }
      elseif (($_POST['age'] != "")) {
        $age_want=$_POST['age'];
        //$age_want_ed=(int)$age_want + 9;

        $sql="select mate.*, (select count(*) from mate_member where mate.no=mate_no) count from mate where city_name='$region_want' AND age = '$age_want'";
        $result=mysqli_query($mysqli,$sql);
        $data=array();

        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
            array_push($data,$row);
            }
            print json_encode($data);
        }
        else{
          echo "-1";
        }
      }
      elseif (($_POST['gender'] != "")) {
        $gender_want = $_POST['gender'];
        
          $sql="select mate.*, (select count(*) from mate_member where mate.no=mate_no) count from mate where city_name='$region_want' AND gender='$gender_want'";
          $result=mysqli_query($mysqli,$sql);
          $data=array();

          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
              array_push($data,$row);
            }
            print json_encode($data);
          }
          else{
            echo "-1";
          }          
                 
      }
      else{
          $sql="select mate.*, (select count(*) from mate_member where mate.no=mate_no) count from mate where city_name='$region_want' ";
          $result=mysqli_query($mysqli,$sql);
          $data=array();

          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
              array_push($data,$row);

            }
            print json_encode($data);
          }
          else{
            echo "-1";
          }
      }

    }
  else{
    echo "Real No";
  }
    mysqli_close($mysqli);
?>
