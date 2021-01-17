<?php 
include '../config/connection.php';
session_start();
$date = getCurrentDate();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];


$result = mysql_query("INSERT INTO tbl_users (`fname`,`lname`,`username`,`password`,`role`) VALUES ('$fname','$lname','$username','$password','$role')");
if($result){
	echo 1;
}else{
	echo 0;
}
?>