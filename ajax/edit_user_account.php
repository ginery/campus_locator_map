<?php 
include "../config/connection.php";

$id = safe(ucwords($_POST['id']));
$fname = safe(ucwords($_POST['fname']));
$lname = safe(ucwords($_POST['lname']));
$role = safe($_POST['role']);
$query = mysql_query("UPDATE tbl_users SET fname='$fname',lname='$lname',role='$role' WHERE `id`='$id'")or die (mysql_error());	
if ($query) {
	echo 1;
}else{
	echo 0;
}
?>