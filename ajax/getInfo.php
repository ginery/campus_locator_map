<?php
include '../config/connection.php';

$id = $_POST['id'];
$getRoom = mysql_query("SELECT * FROM tbl_room WHERE building_id='$id'");

$count = mysql_num_rows($getRoom);

	

    echo '<table style="width: 100%;" class="table table-bordered">
              <thead>
              <tr style="background: #dce9ff;">
                  <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Room</th>
                  <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Left</th>
                  <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Right</th>                  
                  <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Floor</th>
              </tr>
              </thead>
              <tbody>';
            if($count != 0){
              while($data = mysql_fetch_array($getRoom)){
                echo'  
                <tr style="background: #eceff5;"> 
                <td style="padding-left: 5px;" align="left"><span class="room">'.$data['room_name'].'</span></td>
                <td style="padding-left: 5px;" align="left"><span class="subject">'.stepsToKm($data['no_steps_1']). '  <i class="icofont icofont-foot-print text-primary"></i></span></td>
                <td style="padding-left: 5px;" align="left"><span>'.stepsToKm($data['no_steps_2']).' <i class="icofont icofont-foot-print text-primary"></i></span></td>
                <td style="padding-left: 5px;" align="left"><span>'.$data['floor_no'].'</span></td>
                </tr>';
            } }else{
                echo'  
                <tr style="background: #eceff5;"> 
                <td style="padding-left: 5px;" align="center" colspan="5"><span class="room">No rooms encoded.</span></td>
                </tr>';





            }
             echo ' 

              </tbody>
          </table>';


?>