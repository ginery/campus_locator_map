<?php 
include '../config/connection.php';
// $date = getCurrentDate();
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

$result = mysql_query("INSERT INTO `tbl_room` (`room_name`, `desc`, `building_id`, `floor_no`, `distance_g1`, `distance_g2`, `no_steps_1`, `no_steps_2`, `no_stairs_1`, `no_stairs_2`) VALUES ('$room_name', '$desc', '$buildingName','$floor_no', '$d_g1', '$d_g2', '$no_s1', '$no_s2', '$stairs1', '$stairs2')");
if ($result) {
	echo 1;
}else{
	echo 0;
}

?>