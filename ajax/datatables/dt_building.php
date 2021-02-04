<?php 
	include "../../config/connection.php";
	// session_start();
	// $user_id = getCurrentUser();


	$list = array();
	$response['data'] = array();
	$ctr = 1;
	$ctr1 = 2;
	$query = mysql_query("SELECT * FROM tbl_building");
	while($row = mysql_fetch_array($query)){

		
		
		$list['cb'] = "<div class='border-checkbox-section'>   
                            <div class='border-checkbox-group border-checkbox-group-primary'>
                                <input class='border-checkbox' name='cbD' value='$row[id]' type='checkbox' id='checkbox".$ctr1."'>
                                <label class='border-checkbox-label' for='checkbox".$ctr1."'></label>
                            </div>
						</div>";
		$list['uid'] = $ctr++;
		$list['id'] = $row['id'];
		$list['building_name'] = $row['building_name'];
		$list['desc'] = $row['desc'];
		$list['f'] = $row['floor'];
		$list['dg1'] = $row['distance_g1'];
		$list['dg2'] = $row['distance_g2'];
		$list['s1'] = $row['no_steps_1'];
		$list['s2'] = $row['no_steps_2'];

		array_push($response['data'], $list);
	$ctr1++;}
	echo json_encode($response);

?>