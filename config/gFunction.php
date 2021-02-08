<?php 
//public function
function rand_string($length) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    
    return substr(str_shuffle($chars),0,$length);
}

function getRoomName($id){
	
	return $id;

	
}
function getRole($id){

	//$getRole = mysql_fetch_array(mysql_query("SELECT role_name FROM tbl_role WHERE id='$id'"));
	if ($id == 1) {
		$role =  "Developer";
	}else if($id == 2){
		$role =  "Visitor";
	}else if($id == 3){
		$role =  "Teacher";
	}else if($id == 4){
		$role =  "Student";
	}else if($id == 5){
		$role =  "Staff";
	}else{
		$role =  "User";
	}
	

	return $role;
}
function getBuildingName($id){
	$data = mysql_fetch_array(mysql_query("SELECT building_name FROM tbl_building WHERE id='$id'"));

	return $data[0];

}
function safe($data){
	$safe = mysql_real_escape_string($data);
	return $safe;
}
function getCurrentDate(){
	ini_set('date.timezone','UTC');
	date_default_timezone_set('UTC');
	$today = date('H:i:s');
	$date = date('Y-m-d H:i:s', strtotime($today)+28800);
	
	return $date;
}
function staffRole(){
	$role = mysql_fetch_array(mysql_query("SELECT id FROM `tbl_role` WHERE `role_name` = 'Staff'"));

	return $role['id'];
}
function url_page($page){
		$url_page = md5($page);

	return $url_page;
}
function getUserName($id){
	$query = mysql_query("SELECT fname,lname FROM tbl_users WHERE id='$id'");
	$count = mysql_num_rows($query);
	$getRole = mysql_fetch_array($query);
	if ($count == 0 ) {
		$name = "User removed from database";
	}else{
		$name = $getRole[0]." ".$getRole[1];
	}
	

	return $name;
}
function getCurrentUser(){
	$id = $_SESSION['user_id'];

	return $id;
}
function itexmo($number,$message,$apicode,$passwd){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
			),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
}
// $result = itexmo("09955965031","this is a test","TR-CAMPU965031_DBSLX", "tg]%w36and");
function stepsToKm($steps){

	$km = $steps / 1312.34;

	if($km >= 1){
		$kmm = number_format($km, 2)." km";
	}else{
		$kmm = number_format($km, 4)." km";
	}


	return $kmm;
}
?>