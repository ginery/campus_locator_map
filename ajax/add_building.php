<?php 
include '../config/connection.php';
// $date = getCurrentDate();
$building_name = safe($_POST['building_name']);
$desc = safe($_POST['desc']);



$result = mysql_query("INSERT INTO `tbl_building` (`building_name`, `desc`) VALUES ('$building_name', '$desc')");
if ($result) {
	echo 1;
}else{
	echo 0;
}

?>