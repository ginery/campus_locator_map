<?php 
//public function
function rand_string($length) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    
    return substr(str_shuffle($chars),0,$length);
}

function getRoomName($id){
	if($id == 1){
		$room = "Stgb 1";
	}else if($id == 2){
		$room = "Stgb 2";
	}else if($id == 3){
		$room = "Stgb 3";
	}else if($id == 4){
		$room = "Stock Room";
	}else if($id == 5){
		$room = "Conference Room";
	}else if($id == 6){
		$room = "Stgb 7";
	}else if($id == 7){
		$room = "Stgb 8";
	}else if($id == 8){
		$room = "Stgb 9";
	}else if($id == 9){
		$room = "Stgb 10";
	}else if($id == 10){
		$room = "Stgb 11";
	}else if($id == 11){
		$room = "Stgb 12";
	}else if($id == 12){
		$room = "LB -1 Room 102 – Food Trades Tech. Laboratory Room 1";
	}else if($id == 13){
		$room = "LB -1 Room 103 – Food Trades Tech. Lecture Room 1";
	}else if($id == 14){
		$room = "LB -1 Room 104 – Food Trades Tech. Laboratory Room 2";
	}else if($id == 15){
		$room = "LB -1 Room 105 – Food Trades Tech. Lecture Room 2";
	}else if($id == 16){
		$room = "LB -1 Room 201 – ELX/ELC Lecture Room 1";
	}else if($id == 17){
		$room = "LB -1 Room 202 – ELX/ELC Laboratory Room 1";
	}else if($id == 18){
		$room = "LB -1 Room 203 – PLC Laboratory Room";
	}else if($id == 19){
		$room = "LB -1 Room 204 – ELX/ELC Laboratory Room 2";
	}else if($id == 20){
		$room = "LB -1 Room 205 - ELX/ELC Lecture Room 2";
	}else if($id == 21){
		$room = "LB -1 Room 301 – Drafting Tech. Laboratory Room 1";
	}else if($id == 22){
		$room = "LB -1 Room 302 – Drafting Tech. Laboratory Room 2";
	}else if($id == 23){
		$room = "LB -1 Room 303 – Drafting Tech. Laboratory Room 3";
	}else if($id == 24){
		$room = "LB -1 Room 304 – Drafting Tech. Laboratory Room 4";
	}else if($id == 25){
		$room = "LB -1 Room 305 – CAD Laboratory Room";
	}else if($id == 26){
		$room = "MT-1 Food Trades Technology";
	}else if($id == 27){
		$room = "ComLab 1";
	}else if($id == 28){
		$room = "Room 3A";
	}else if($id == 29){
		$room = "Room 3B";
	}else if($id == 30){
		$room = "Room 3C";
	}else if($id == 31){
		$room = "Room 3D";
	}else if($id == 32){
		$room = "Room 3E";
	}else if($id == 33){
		$room = "Room 3F";
	}else if($id == 34){
		$room = "Room 3G";
	}else if($id == 35){
		$room = "Room 3H";
	}else if($id == 36){
		$room = "Room 3I";
	}else if($id == 37){
		$room = "Room 3J";
	}else if($id == 38){
		$room = "AB - 1 Room 101 – Conference Room";
	}else if($id == 39){
		$room = "AB - 1 Room 102 – Conference Room";
	}else if($id == 40){
		$room = "AB - 1 Room 103 – Conference Room";
	}else if($id == 41){
		$room = "AB - 1 Room 104 – Conference Room";
	}else if($id == 42){
		$room = "AB - 1 Room 105 – Conference Room";
	}else if($id == 43){
		$room = "AB - 1 Room 106 – Student Function Room";
	}else if($id == 44){
		$room = "AB - 1 Room 207 – Conference Room";
	}else if($id == 45){
		$room = "AB - 1 Room 208 – Conference Room";
	}else if($id == 46){
		$room = "AB - 1 Room 2010 – Conference Room";
	}else if($id == 47){
		$room = "AB - 1 Room 2011 – Extension Office";
	}else if($id == 48){
		$room = "MM1";
	}else if($id == 49){
		$room = "MM2";
	}else if($id == 50){
		$room = "MM3";
	}else if($id == 51){
		$room = "MM4";
	}else if($id == 52){
		$room = "Deans Office";
	}else if($id == 53){
		$room = "OSA";
	}else if($id == 54){
		$room = "Guidance Office";
	}else if($id == 55){
		$room = "Registrar Office";
	}else if($id == 56){
		$room = "Assessment/Casher";
	}else if($id == 57){
		$room = "Library";
	}else if($id == 58){
		$room = "ICT";
	}else if($id == 59){
		$room = "TVEP Room";
	}else if($id == 60){
		$room = "Automotive Room";
	}else if($id == 61){
		$room = "Mechanical Room";
	}else if($id == 62){
		$room = "Research Office";
	}else if($id == 63){
		$room = "OJT Office";
	}else if($id == 64){
		$room = "SSG Office";
	}else if($id == 65){
		$room = "Faculty Office";
	}else if($id == 66){
		$room = "Physical Plant development & Mgt.";
	}else if($id == 67){
		$room = "NSTP Office";
	}else if($id == 68){
		$room = "AVR";
	}else if($id == 69){
		$room = "Canteen";
	}else if($id == 70){
		$room = "Alumni Building";
	}else if($id == 71){
		$room = "PTA Hall";
	}else if($id == 72){
		$room = "Technopacer Office";
	}else if($id == 73){
		$room = "RCY Office";
	}else if($id == 74){
		$room = "Clinic";
	}else{
		$room = "Unknow Room";
	}
	return $room;

	//last nummber 65
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
?>