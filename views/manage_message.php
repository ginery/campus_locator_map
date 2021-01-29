<div class="card-block inverse-breadcrumb">
    <div class="breadcrumb-header">
        <h5>Manage Messages</h5>
        <span id="date_time"></span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.php?page=<?php echo url_page('home');?>">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="index.php?page=<?php echo url_page('manage-message');?>">Manage Messages</a>
            </li>
        </ul>
    </div>
</div>
<!-- Page-body start -->
<div class="page-body">
    <div class="card">
        <!-- Email-card start -->
        <div class="card-block email-card">
            
            <div class="row">
                <!-- Left-side section start -->
                <div class="col-lg-12 col-xl-3">
                    <div class="user-body">
                        <div class="p-20 text-center">
                        </div>
                        <ul class="page-list nav nav-tabs flex-column">
                        	<li class="nav-item mail-section">
                                <a class="nav-link active" href="#" id="compose_f" onclick="compose_f()">
                                    <i class="icofont icofont-pencil"></i> Compose                                    
                                </a>
                            </li>
                            <!-- <li class="nav-item mail-section">
                                <a class="nav-link" href="#" >
                                    <i class="icofont icofont-inbox"></i> Inbox
                                    <span class="label label-primary f-right">6</span>
                                </a>
                            </li> -->
                            <li class="nav-item mail-section">
                                <a class="nav-link" href="#" id="sent_f" onclick="sent_f()">
                                    <i class="icofont icofont-paper-plane"></i> Sent Mail
                                </a>
                            </li>
                           <!--  <li class="nav-item mail-section">
                                <a class="nav-link" href="email-inbox.htm">
                                    <i class="icofont icofont-ui-delete"></i> Trash
                                    <span class="label label-info f-right">30</span>
                                </a>
                            </li> -->
                        </ul>
                     
                    </div>
                </div>
                <!-- Left-side section end -->
                <!-- Right-side section start -->
                <div class="col-lg-12 col-xl-9">
                	<div class="col-md-12">
	                    <div class="mail-body" id="content">
	                        <div class="mail-body">

	                            <div class="mail-body-content" id="div_compose" >
	                                <form id="frm_send">                                   
	                                    <div class="form-group">
	                                    	<div class="row">
	                                    		<div class="col-md-6">
			                                    	<select class="js-example-placeholder-multiple col-sm-12" name="teacher_name" style="border: 0px;">
			                                    		<option value="-1">Select Teacher</option>
			                                            <option value="09152674300">Teacher 1</option>
			                                            <option value="09273303598">Teacher 2</option>
			                                        </select>
		                                    	</div>		                                    	
	                                    	</div>	                                       
	                                    </div>
	                                    <div class="form-group">
	                                        <input type="text" class="form-control" name="subject" placeholder="Subject" autocomplete='off'>
	                                    </div>
	                                     <div class="form-group">
	                                        <textarea  class="form-control" name="message" placeholder="Your message here.." autocomplete='off'></textarea>
	                                    </div>
	                                    <button type="submit" class="btn btn-out btn-success btn-square"><span class="fa fa-send"></span> Send</button>
	                                </form>
	                            </div>
	                            <div class="mail-body-content" id="div_sent" style="display: none;">
	                                <div class="mail-body-content">
                                        <div class="table-responsive" id="tbl_msg">
                                            <table class="table">
                                                <?php 
                                                $user_id = $_SESSION['user_id'];
                                                $getMsg = mysql_query("SELECT * FROM tbl_messages  WHERE msg_status = 'S' AND msg_user_id='$user_id'");
                                            	while($row = mysql_fetch_array($getMsg)){
                                            	?>
                                                <tr class="unread" onclick="viewmsg(<?php echo $row['msg_id']?>)">
                                                    <td>
                                                        <div class="check-star">
                                                            <div class="checkbox-fade fade-in-primary checkbox">
                                                                <!-- <label> -->
                                                                      <!-- <input type="checkbox" value=""> -->
                                                                     <!--  <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                  </label> -->
                                                            </div>
                                                            <i class="icofont icofont-star text-warning"></i>
                                                        </div>
                                                    </td>
                                                    <td><a href="#" onclick="viewmsg(<?php echo $row['msg_id']?>)" class="email-name"><?= getUserName($row['msg_user_id'])?></a></td>
                                                    <td><a href="#" onclick="viewmsg(<?php echo $row['msg_id']?>)" class="email-name"><?= $row['msg_subject']?></a></td>
                                                    <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                    <td class="email-time"><?= date("g:i A", strtotime($row['msg_time']));?></td>
                                                </tr>
          									<?php } ?>
                 
                                            </table>
                                        </div>
                                    </div>
                                    <div class="mail-body-content" id="div_read" style="display: none;">
                                    <div class="media m-b-20">
                                        <div class="media-left photo-table">
                                            <a href="#">
                                                <img class="media-object img-radius" src="..\lib\assets\images\avatar-3.jpg" alt="E-mail User">
                                            </a>
                                        </div>
                                        <div class="media-body photo-contant">
                                            <a href="#">
                                                <h6 class="user-name txt-primary" id="fullname"></h6>
                                            </a>
                                            <a class="user-mail txt-muted" href="#">
                                                <h6>To:<span class="__cf_email__" id="teacher_num"></span></h6>
                                            </a>
                                            <div>
                                                <h6 class="email-welcome-txt" id="subject"></h6>
                                                <p class="email-content" id="msg_content">
                                                   
                                                </p>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
	                            </div>

	                        </div>
	                    </div>
               		</div>

                </div>
                <!-- Right-side section end -->
            </div>
        </div>
    </div>
</div>
<!-- Page-body end -->
<script type="text/javascript">
$(document).ready(function(){
	
	
});
function compose_f(){
	$("#div_compose").show();
	$("#compose_f").addClass('active');
	$("#sent_f").removeClass('active');
	$("#div_sent").hide();
    $("#div_read").hide();
	//alert("test");
}
function sent_f(){
	$("#div_sent").show();
	$("#div_compose").hide();
    $("#div_read").hide();
    $("#tbl_msg").show();
	$("#compose_f").removeClass('active');
	$("#sent_f").addClass('active');
	//alert("test");
}
$("#frm_send").submit(function(e){
	e.preventDefault();
	$.ajax({
		type: "POST",
		url: "../ajax/send_message.php",
		data: $(this).serialize(),
		success: function(data){
           alert(data);
			if(data == 1){
                notify("top", "right", "fa fa-check", "success", "animated bounceInRight", "animated bounceOutRight","<b>Success!</b> "," Message sent.");
                setTimeout(function(){
                       location.reload();
                },1000);
            }else{
                notify("top", "right", "fa fa-check", "danger", "animated bounceInRight", "animated bounceOutRight","<b>Failed!</b> "," Sending Message.");
            }
		}
	});
	
});
function viewmsg(id){
    $.ajax({
        type: "POST",
        url: "../ajax/viewmessages.php",
        data: {
            id: id
        },
        success: function(data){
            var o = JSON.parse(data);
           //alert(data);
            $("#tbl_msg").hide();
            $("#div_read").show();

            $("#fullname").text(o.fullname);
            $("#teacher_num").text(o.msg_to);
            $("#subject").text(o.subject);
            $("#msg_content").text(o.msg);
        }
    });
}
</script>