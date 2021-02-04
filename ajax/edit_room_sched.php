<?php 
include "../config/connection.php";

$id = safe($_POST['id']);
$room_name = safe($_POST['room_name']);
$desc = safe($_POST['desc']);
$buildingName = safe($_POST['building']);
$floor_no = safe($_POST['floor_no']);
$d_g1 = safe($_POST['d_g1']);
$d_g2 = safe($_POST['d_g2']);
$no_s1 = safe($_POST['no_steps_1']);
$no_s2 = safe($_POST['no_steps_2']);
$stairs1 = safe($_POST['no_stairs_1']);
$stairs2 = safe($_POST['no_stairs_2']);

$query = mysql_query("UPDATE tbl_room SET `room_name`='$room_name',`desc`='$desc',`building_id`='$buildingName',`floor_no`='$floor_no',`distance_g1`='$d_g1',`distance_g2`='$d_g2',`no_steps_1`='$no_s1',`no_steps_2`='$no_s2',`no_stairs_1`='$stairs1',`no_stairs_2`='$stairs2' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>