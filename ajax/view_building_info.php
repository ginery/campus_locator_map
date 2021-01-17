<?php
include '../config/connection.php';

$id = $_POST['id'];
$time = $_POST['time'];


$timeconvert =  date("H:i:s", strtotime($time));

$query = mysql_query("SELECT * FROM tbl_room_sched WHERE building='$id' AND start_time <= '$timeconvert' AND end_time >= '$timeconvert'");

$count = mysql_num_rows($query);  

?>

<table style="width: 100%;" class="table table-bordered">
   <thead>
   <?php if($id == 12){ ?>
      <tr style="background: #dce9ff;">
       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Room</th>                 
       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">From</th>
       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">To</th>
       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Working Days</th>
   </tr>

  <?php }else{ ?>
    <tr style="background: #dce9ff;">
       <th style="padding-left: 5px; width: 135px !important; height: 19px; color: #202733;" align="left">Room</th>
       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Subject</th>
        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">From</th>
        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">To</th>
        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Teacher</th>
    </tr>
    
   <?php } ?>

   </thead>

	 <tbody>    
	 	<?php
	 	if ($count) {
		while($data = mysql_fetch_array($query)){

		?>
            <tr style="background: #eceff5;">
              <td style="padding-left: 5px; width: 135px !important;" align="left"><span class="room"><?= getRoomName($data['room'])?></span></td>
              <td style="padding-left: 5px;" align="left"><span class="subject"><?= $data['subject']?></span></td>
              <td style="padding-left: 5px;" align="left"><span><?= date("g:iA", strtotime($data['start_time']))?></span></td>
              <td style="padding-left: 5px;" align="left"><span><?= date("g:iA", strtotime($data['end_time']))?></span></td>
              <td style="padding-left: 5px;" align="left"><span><?= $data['teacher']?></span></td>
           </tr>
           </tbody>
           <?php
			} }else{

            if($id == 12){?>
               <tr style="background: #eceff5;">
                  <td style="padding-left: 5px;" align="left"><span class="room">Registrar Office</span></td>                
                  <td style="padding-left: 5px;" align="left"><span>8:00 AM</span></td>
                  <td style="padding-left: 5px;" align="left"><span>5:00PM</span></td>
                  <td style="padding-left: 5px;" align="left"><span>Monday - Friday</span></td>                  
               </tr>
               <tr style="background: #eceff5;">
                  <td style="padding-left: 5px;" align="left"><span class="room">Assessment/Casher</span></td>                
                  <td style="padding-left: 5px;" align="left"><span>8:00 AM</span></td>
                  <td style="padding-left: 5px;" align="left"><span>5:00PM</span></td>
                  <td style="padding-left: 5px;" align="left"><span>Monday - Friday</span></td>                  
               </tr>

           <?php }else{
			?>
			<tr style="background: #eceff5;">
              <td style="padding-left: 5px;" align="center" colspan="5">No Result..</td>
            </tr>

		<?php  } } ?>
</table>
