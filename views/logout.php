<?php 
include "../config/connection.php";
session_start();
$query = mysql_query("UPDATE tbl_users SET status='Inactive' WHERE `id`='$_SESSION[user_id]'")or die (mysql_error());
session_destroy();
session_unset();

header('location: ../index.php');

?>