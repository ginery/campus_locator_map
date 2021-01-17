<?php 
include '../config/connection.php';
$id = $_POST['id'];
$row = mysql_fetch_array(mysql_query("SELECT * FROM tbl_messages WHERE msg_id='$id'"));

$list = array();
$list['subject'] = $row['msg_subject'];
$list['fullname'] = getUserName($row['msg_user_id']);
$list['msg'] = $row['msg_messages'];
$list['msg_to'] = $row['msg_to'];

echo json_encode($list);
?>