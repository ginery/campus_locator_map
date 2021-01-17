<?php 
include "../config/connection.php";

$id = safe($_POST['id']);

$result = mysql_query("DELETE FROM tbl_users WHERE id='$id'")or die (mysql_error());
if ($result) {
	echo 1;
	$query = mysql_query("UPDATE tbl_users SET status='Inactive' WHERE `id`='$id'")or die (mysql_error());
}else{
	echo 0;
}
?>