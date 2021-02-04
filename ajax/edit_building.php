<?php 
include "../config/connection.php";

$id = safe($_POST['id']);
$building_name = safe($_POST['building_name']);
$desc = safe($_POST['desc']);
$floor_no = safe($_POST['floor_no']);
$d_g1 = safe($_POST['d_g1']);
$d_g2 = safe($_POST['d_g2']);
$no_s1 = safe($_POST['no_steps_1']);
$no_s2 = safe($_POST['no_steps_2']);

$query = mysql_query("UPDATE tbl_building SET `building_name`='$building_name',`desc`='$desc',`floor`='$floor_no',`distance_g1`='$d_g1',`distance_g2`='$d_g2',`no_steps_1`='$no_s1',`no_steps_2`='$no_s2' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>