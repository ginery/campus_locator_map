<?php 
include "../config/connection.php";

$id = $_POST['id'];

$data = mysql_fetch_array(mysql_query("SELECT * FROM tbl_room_sched WHERE id='$id'"));



echo $data['building_name'];


?>