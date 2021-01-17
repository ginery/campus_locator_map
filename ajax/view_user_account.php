<?php

include "../config/connection.php";

$id = safe($_POST['id']);

$response = array();
$getData = mysql_query("SELECT * FROM tbl_users WHERE id='$id'")or die (mysql_error());
while ($data = mysql_fetch_array($getData)) {
	$response["id"] = $data['id'];
	$response["fname"] = $data['fname'];
	$response["lname"] = $data['lname'];
	$response["username"] = $data['username'];
	$response["password"] = $data['password'];
	$response["role"] = getRole($data['role']);
}
echo json_encode($response);