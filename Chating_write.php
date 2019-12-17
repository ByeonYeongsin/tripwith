<?php 
session_start();

$mate_no = $_POST['no'];
$email = $_SESSION['email'];
//$email = "ddd@ddd.ddd";
//$username = "ddd";
$username = $_SESSION['username'];
$msg = $_POST['msg'];
$time = date('Y-m-d H:i:s');

$db = new mysqli('localhost', 'root', '1234', 'tripwith');
$db->query('SET NAMES utf8');


$db->query("
	INSERT INTO mate_chat(mate_no, write_time, email, username, message)
	VALUES(
		'$mate_no',
		NOW(),
		'$email',
		'$username',
		'$msg'
	)
");
?>