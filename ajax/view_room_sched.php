<?php

include "../config/connection.php";

$id = safe($_POST['id']);

$response = array();
$getData = mysql_query("SELECT * FROM tbl_room WHERE id='$id'")or die (mysql_error());
while ($data = mysql_fetch_array($getData)) {
	$response["id"] = $data['id'];
	$response["room_name"] = $data['room_name'];
	$response["desc"] = $data['desc'];
	$response["building_id"] = getBuildingName($data['building_id']);
	$response["d_g1"] = $data['distance_g1'];
	$response["d_g2"] = $data['distance_g2'];
	$response["no_s1"] = $data['no_steps_1'];
	$response["no_s2"] = $data['no_steps_2'];
	$response["no_s"] = $data['no_stairs'];
}
echo json_encode($response);