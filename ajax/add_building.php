<?php 
include '../config/connection.php';
// $date = getCurrentDate();
$building_name = safe($_POST['building_name']);
$desc = safe($_POST['desc']);
$floor_no = safe($_POST['floor_no']);
$d_g1 = safe($_POST['d_g1']);
$d_g2 = safe($_POST['d_g2']);
$no_s1 = safe($_POST['no_steps_1']);
$no_s2 = safe($_POST['no_steps_2']);


$result = mysql_query("INSERT INTO `tbl_building` (`building_name`, `desc`, `floor`, `distance_g1`, `distance_g2`, `no_steps_1`, `no_steps_2`) VALUES ('$building_name', '$desc', '$floor_no', '$d_g1', '$d_g2', '$no_s1', '$no_s2')");
if ($result) {
	echo 1;
}else{
	echo 0;
}

?>