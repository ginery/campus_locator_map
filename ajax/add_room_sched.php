<?php 
include '../config/connection.php';
$date = getCurrentDate();
$st = safe($_POST['start_time']);
$et = safe($_POST['end_time']);
$subject = safe($_POST['subject']);
$room = safe($_POST['room']);
$room_name = getRoomName($room);
$teacher = safe($_POST['teacher']);

$stgb = array(1,2,3,4,5,6,7,8,9,10,11);
$three_storey = array(12,13,14,15,16,17,18,19,20,21,22,23,24,25);
$com_bldg = array(26,27);
$academic_1 = array(28,29,30,31,32);
$academic_2 = array(33,34,35,36,37);
$drafting_building = array(38,39,40,41,42,43,44,45,46,47);
$mm_12 = array(48,49);
$mm_34 = array(50,51);
$admin = array(55,56);
if (in_array($room, $stgb)) {
	$building = 1;
	$building_name = "Stgb Building";
}else if(in_array($room, $three_storey)){
	$building = 2;
	$building_name = "Three Storey Laboratory Building";
}else if(in_array($room, $com_bldg)){
	$building = 3;
	$building_name = "Computer Laboratory Building";
}else if(in_array($room, $academic_1)){
	$building = 4;
	$building_name = "Academic 1 Building";
}else if(in_array($room, $academic_2)){
	$building = 5;
	$building_name = "Academic 2 Building";
}else if(in_array($room, $drafting_building)){
	$building = 6;
	$building_name = "Drafting Building";
}else if(in_array($room, $mm_12)){
	$building = 7;
	$building_name = "MM1 & 2 Building";
}else if(in_array($room, $mm_34)){
	$building = 8;
	$building_name = "MM3 & 4 Building";
}else if(in_array($room, $mm_34)){
	$building = 12;
	$building_name = "MM3 & 4 Building";
}else{
	if ($room == 59) {
		$building = 9;
		$building_name = "TVEP Building";
	}else if($room == 60){
		$building = 10;
		$building_name = "Automotive Building";
	}else if($room == 61){
		$building = 11;
		$building_name = "Mechanical Building";
	}else{
		$building = 0;
	}
	
}

$sql = "INSERT INTO `tbl_room_sched` (`id`, `room`, `start_time`, `end_time`, `subject`, `teacher`, `building`, `building_name`, `room_name`) VALUES (NULL, '$room', '$st', '$et', '$subject', '$teacher', '$building', '$building_name', '$room_name')";

// $result = mysql_query("INSERT INTO `tbl_room_sched` (`id`, `room`, `start_time`, `end_time`, `subject`, `teacher`, `building`, `building_name`, `room_name`) VALUES ('','$room','$st','$et','$subject', '$teacher','$building','$building_name','$room_name')")or die (mysql_error());

$result = mysql_query($sql);
if ($result) {
	echo 1;
}else{
	echo 0;
}

?>