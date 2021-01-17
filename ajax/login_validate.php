<?php 

include "../config/connection.php";
$uname = safe($_POST['uname']);
$pass = safe(md5($_POST['password']));



	$sql = mysql_query("SELECT * FROM tbl_users WHERE username = '$uname' AND password = '$pass'")or die (mysql_error());
$data = mysql_fetch_array($sql);
if ($data) {
	
		session_start();
		if($data['role'] == 2){
			$_SESSION['status'] = "out";
			echo 0;
		}else{
			$_SESSION['status'] = "in";
			$_SESSION['uname'] = $data['username'];
			$_SESSION['user_id'] = $data['id'];
			$_SESSION['fname'] = $data['fname'];
			$_SESSION['lname'] = $data['lname'];
			$_SESSION['role'] = $data['role'];
			$query = mysql_query("UPDATE tbl_users SET status='Active' WHERE `id`='$_SESSION[user_id]'")or die (mysql_error());
			echo 11;
		}
		
}else{
	echo 0;
}	
	