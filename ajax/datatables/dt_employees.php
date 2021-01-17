<?php 
	include "../../config/connection.php";
	// session_start();
	// $user_id = getCurrentUser();


	$list = array();
	$response['data'] = array();
	$ctr = 1;
	$ctr1 = 2;
	$query = mysql_query("SELECT * FROM tbl_employees");
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
		$list['ref_num'] = $row['ref_num'];
		$list['name'] = $row['name'];
		$list['contact_num'] = $row['contact_num'];
		$list['address'] = $row['address'];
		$list['classification'] = $row['classification'];
		$list['date_hire'] = $row['date_hire'];
		$list['status'] = $row['status'];
		$list['encoded_by'] = $encoded_by;

		array_push($response['data'], $list);
	$ctr1++;}

	echo json_encode($response);

?>