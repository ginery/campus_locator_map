<?php 
	include "../../config/connection.php";

	//$user_role = $_GET['data'];


	$list = array();
	$response['data'] = array();
	$ctr = 1;
	$ctr1 = 2;
	$query = mysql_query("SELECT * FROM tbl_position ORDER BY id DESC")or die (mysql_error());
	while($row = mysql_fetch_array($query)){
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
		$list['position_name'] = $row['position_name'];
		$list['date_added'] = $row['date_added'];
		$list['encoded_by'] = $encoded_by;
		

		array_push($response['data'], $list);
	$ctr1++;}

	echo json_encode($response);

?>