<?php
if(!$_GET['date'])
{
	$_GET['date'] = date('Y-m-d H:i:s');
}

$data = array();
$date = $_GET['date'];
$mate_no = $_GET['no'];

$db = new mysqli('localhost', 'root', '1234', 'tripwith');
$db->query('SET NAMES utf8');

for($i=0; $i<80; $i++)
{
	$res = $db->query('SELECT * FROM mate_chat WHERE mate_no = "'.$mate_no.'" AND write_time > "' . $date . '"');

	if($res->num_rows > 0)
	{		
		while($v = $res->fetch_array(MYSQLI_ASSOC))
		{
			$data[] = $v;
			$date = $v['write_time'];
		}
		
		break;
	}
	
	usleep(250000);
}

echo json_encode(array('date' => $date, 'data' => $data));
?>