<?php 
include '../config/connection.php';
$date = getCurrentDate();
$fname = safe($_POST['fname']);
$lname = safe($_POST['lname']);
$purpose = safe($_POST['purpose']);
$email = safe($_POST['email']);
//$password = safe((md5($_POST['password'])));
//$status = safe($_POST['status']);

$result = mysql_query("INSERT INTO tbl_users VALUES ('','$fname','$lname','$email','','2','','','Active','$purpose')")or die (mysql_error());
$id = mysql_insert_id();
if ($result) {
	echo 1;
	session_start();
	$_SESSION['status'] = "in";
	$_SESSION['uname'] = $email;
	$_SESSION['user_id'] = $id;
	$_SESSION['fname'] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['role'] = 2;
}else{
	echo 0;
}
?>