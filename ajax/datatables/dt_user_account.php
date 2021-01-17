<?php 
	include "../../config/connection.php";
	session_start();
	$user_id = getCurrentUser();


	$list = array();
	$response['data'] = array();
	$ctr = 1;
	$ctr1 = 2;
	$query = mysql_query("SELECT * FROM tbl_users WHERE role!='1' AND id != '$user_id' ORDER BY id DESC");
	while($row = mysql_fetch_array($query)){
		if ($row['role'] == 0) {
			$role = '<div class="label-main"><label class="label label-warning">No role assign</label></div>';
		}else if($row['role'] == -1) {
			$role = '<div class="label-main"><label class="label label-danger">No Staff Role on Database</label></div>';
		}else{
			$role = '<div class="label-main"><label class="label label-success">'.getRole($row['role']).'</label></div>';
		}

		if ($row['status'] == "Active") {
			$status = '<label class="label label-inverse-success">'.$row['status'].'</label>';
		}else if($row['status'] == "Inactive"){
			$status =  '<label class="label label-inverse-info-border">'.$row['status'].'</label>';
		}else{
			$status = "";
		}

		if ($row['encoded_by'] == "") {
			$encoded_by = '<div class="label-main"><label class="label label-info">Added by Developer</label></div>';
		}else{
			$encoded_by = '<div class="label-main"><label class="label label-success">'.getUserName($row['encoded_by']).'</label></div>';
		}


		//$list['count'] = $count++;
		$list['cb'] = "<div class='border-checkbox-section'>   
                            <div class='border-checkbox-group border-checkbox-group-primary'>
                                <input class='border-checkbox' name='cbD' value='$row[id]' type='checkbox' id='checkbox".$ctr1."'>
                                <label class='border-checkbox-label' for='checkbox".$ctr1."'></label>
                            </div>
                        </div>";
		$list['uid'] = $ctr++;
		$list['u_id'] = $row['id'];
		$list['fname'] = $row['fname'];
		$list['lname'] = $row['lname'];
		$list['role'] = $role;
		$list['status'] = $status;
		$list['encoded_by'] = $encoded_by;
		

		array_push($response['data'], $list);
	$ctr1++;}

	echo json_encode($response);

?>