<?php

include "../config/connection.php";

$id = safe($_POST['id']);

$response = array();
$getData = mysql_query("SELECT * FROM tbl_position WHERE id='$id'")or die (mysql_error());
while ($data = mysql_fetch_array($getData)) {
	$response["id"] = $data['id'];
	$response["position_name"] = $data['position_name'];
}
echo json_encode($response);