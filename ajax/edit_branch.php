<?php 
include "../config/connection.php";

$id = safe($_POST['id']);
$branch_name = safe(ucwords($_POST['branch_nameEdit']));


$query = mysql_query("UPDATE tbl_branch SET branch_name='$branch_name' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>