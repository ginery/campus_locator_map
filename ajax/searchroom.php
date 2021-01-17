<?php 
include "../config/connection.php";

$id = $_GET['id'];

$data = mysql_fetch_array(mysql_query("SELECT * FROM tbl_room_sched WHERE room_name LIKE '%$id%'"));

$list = array($data);

$list['room'] = $data['room_name'];
$list['room_id'] = $data['room'];
$list['id'] = $data['id'];

echo json_encode($list);
?>