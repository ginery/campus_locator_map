<?php

include '../config/connection.php';

$date = getCurrentDate();
$position_name =  safe(ucfirst($_POST['position_name']));
$encoded_by =  safe($_POST['encoded_by']);


$result = mysql_query("INSERT INTO tbl_position VALUES ('','$position_name','$date','$encoded_by')")or die (mysql_error());
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}
?>