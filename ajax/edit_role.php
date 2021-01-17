<?php 
include "../config/connection.php";

$id = safe($_POST['id']);
$role_name = safe(ucwords($_POST['role_nameEdit']));


$query = mysql_query("UPDATE tbl_role SET role_name='$role_name' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>