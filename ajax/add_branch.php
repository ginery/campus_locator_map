<?php

include '../config/connection.php';

$date = getCurrentDate();
$branch_name =  safe(ucfirst($_POST['branch_name']));
$encoded_by =  safe($_POST['encoded_by']);


$result = mysql_query("INSERT INTO tbl_branch VALUES ('','$branch_name','$date','$encoded_by')")or die (mysql_error());
	if ($result) {
		echo 1;
	}else{
		echo 0;
	}
?>