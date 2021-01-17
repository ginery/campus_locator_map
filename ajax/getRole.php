<?php

include "../config/connection.php";

$id = safe($_POST['id']);

$response = array();
$getData = mysql_query("SELECT * FROM tbl_role WHERE id='$id'")or die (mysql_error());
while ($data = mysql_fetch_array($getData)) {
	$response["id"] = $data['id'];
	$response["role_name"] = $data['role_name'];
}
echo json_encode($response);