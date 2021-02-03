<?php 
include "../config/connection.php";

$id = $_POST['id'];

$getRoom = mysql_query("SELECT * FROM tbl_building WHERE id='$id'");
$data = mysql_fetch_array($getRoom);
echo ' 

    <div class="col-sm-6  style="float: left;">
        <h4 class="sub-title">From Gate 1</h4>
            <ul>
                <li style="list-style-type: none;">
                    <i class="icofont icofont-social-aim text-success"></i>KM: '.$data['distance_g1'].'
                </li>
                <li style="list-style-type: none;">
                    <i class="icofont icofont-foot-print text-primary"></i>Steps: '.$data['no_steps_1'].'
                </li>
            </ul>                       
        <br>
        <h4 class="sub-title">From Gate 2</h4>
            <ul>
                <li style="list-style-type: none;">
                    <i class="icofont icofont-social-aim text-success"></i>KM: '.$data['distance_g2'].'
                </li>
                <li style="list-style-type: none;">
                    <i class="icofont icofont-foot-print text-primary"></i>Steps: '.$data['no_steps_2'].'
                </li>
            </ul>                       
    </div> 
';
?>