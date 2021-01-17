<?php

include "../config/connection.php";

$id = safe($_POST['id']);

$response = array();
$getData = mysql_query("SELECT * FROM tbl_room_sched WHERE id='$id'")or die (mysql_error());
while ($data = mysql_fetch_array($getData)) {
	$response["id"] = $data['id'];
	$response["room"] = getRoomName($data['room']);
	$response["st"] = date("g:iA", strtotime($data['start_time']));
	$response["et"] = date("g:iA", strtotime($data['end_time']));
	$response["subject"] = $data['subject'];
	$response["teacher"] = $data['teacher'];
}
echo json_encode($response);