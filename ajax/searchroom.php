<?php 
include "../config/connection.php";

$id = $_GET['id'];
$getRoom = mysql_query("SELECT * FROM tbl_room where room_name LIKE '%$id%'");
$count = mysql_num_rows($getRoom);
$data = mysql_fetch_array($getRoom);


$list = array($data);
if($count != 0){
    $list['name'] = $data['room_name'];
    $list['building_id'] = $data['building_id'];
   // $list['id'] = $data['id'];
}else{
    $getBuilding = mysql_query("SELECT * FROM tbl_building WHERE building_name LIKE '%$id%'");
    $row = mysql_fetch_array($getBuilding);

    $list['name'] = $row['building_name'];
    $list['building_id'] = $row['id'];

}


echo json_encode($list);
?>