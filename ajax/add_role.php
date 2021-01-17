<?php

include '../config/connection.php';

$date = getCurrentDate();
$role_name =  safe(ucfirst($_POST['role_name']));
$encoded_by =  safe($_POST['encoded_by']);


$result = mysql_query("INSERT INTO tbl_role VALUES ('','$role_name','$date','$encoded_by')")or die (mysql_error());
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}
?>