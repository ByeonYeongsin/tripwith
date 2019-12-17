<?php
session_start();
    $mysqli = new mysqli('localhost', 'root', '1234', 'tripwith');
    $mysqli->query('SET NAMES utf8');
    if (mysqli_connect_error()) {
      
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }


if(isset($_POST['no'])){
	$no = $_POST['no'];
	$email = $_SESSION['email'];
	//$email = "fff@fff.fff";
	$user_sql="select * from member where email='$email'";
	$user = mysqli_fetch_array(mysqli_query($mysqli,$user_sql));
	$name = $_SESSION['username'];

	$mate_sql="select * from mate where no='$no'";
	$mate = mysqli_fetch_array(mysqli_query($mysqli,$mate_sql));
	
	if($mate['gender']=="mixed" || $mate['gender']==$user['gender']){
		if((int)($_SESSION['Age']/10) == (int)($mate['age']/10)){
			$sql="insert into mate_member(mate_no,email,username) values('$no','$email','$name')";
    		$result=mysqli_query($mysqli,$sql);
    		if(!$result) echo "-1";
    		else echo "100";
		}
		else echo "2";	//나이가 안맞을 때
	}
	else{
		echo "1";	//성별이 안맞을 때
	}
}
else{
	echo "0";
}


?>