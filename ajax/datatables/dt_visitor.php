<?php 
	include "../../config/connection.php";
	// session_start();
	// $user_id = getCurrentUser();

	//6
	$list = array();
	$response['data'] = array();
	$ctr = 1;
	$ctr1 = 2;
	$query = mysql_query("SELECT * FROM tbl_users WHERE role='2'");
	while($row = mysql_fetch_array($query)){
		
		$list['cb'] = "<div class='border-checkbox-section'>   
                            <div class='border-checkbox-group border-checkbox-group-primary'>
                                <input class='border-checkbox' name='cbD' value='$row[id]' type='checkbox' id='checkbox".$ctr1."'>
                                <label class='border-checkbox-label' for='checkbox".$ctr1."'></label>
                            </div>
                        </div>";
		$list['uid'] = $ctr++;
		$list['id'] =$row['id'];
		$list['fname'] = $row['fname'];
		$list['lname'] = $row['lname'];
		$list['username'] = $row['username'];
		$list['purpose'] = $row['purpose'];
		//$list['teacher'] = $row['teacher'];

		array_push($response['data'], $list);
	$ctr1++;}
	echo json_encode($response);

?>