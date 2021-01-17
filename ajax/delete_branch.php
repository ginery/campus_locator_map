<?php 
include "../config/connection.php";

$id = safe($_POST['id']);

$result = mysql_query("DELETE FROM tbl_branch WHERE id='$id'")or die (mysql_error());
if ($result) {
	echo 1;
}else{
	echo 0;
}
?>