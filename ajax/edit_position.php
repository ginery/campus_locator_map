<?php 
include "../config/connection.php";

$id = safe($_POST['id']);
$position_name = safe(ucwords($_POST['position_nameEdit']));


$query = mysql_query("UPDATE tbl_position SET position_name='$position_name' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>