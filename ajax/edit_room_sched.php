<?php 
include "../config/connection.php";

$id = safe($_POST['id']);
$start_time = safe($_POST['start_time']);
$end_time = safe($_POST['end_time']);
$subject = safe(ucwords($_POST['subject']));
$room = safe($_POST['room']);
$teacher = safe(ucwords($_POST['teacher']));

$query = mysql_query("UPDATE tbl_room_sched SET room='$room',start_time='$start_time',end_time='$end_time',subject='$subject',teacher='$teacher' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>