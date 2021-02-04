<?php require 'modals/add_room_sched.php';?>
<?php require 'modals/edit_room_sched.php';?>
<?php require 'modals/view_room.php';?>
<style type="text/css">
.dt-body-nowrap {
   white-space: normal;
}
</style>
<div class="card borderless-card">
<div class="card-block inverse-breadcrumb">
    <div class="breadcrumb-header">
        <h5>Manage Rooms</h5>
        <span id="date_time"></span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.php?page=<?php echo url_page('home');?>">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="index.php?page=<?php echo url_page('manage-room');?>">Manage Rooms</a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="card">
    <div class="card-header" >
         <button type="button" style="float:right;"  class="btn btn-danger waves-effect" onclick="delUser()" id="btnModalDelete">Delete</button>
         <button type="button" style="float:right; margin-right: 3px;" class="btn btn-info waves-effect" id="btnModalAdd">Add</button>
         <br>
         <br>
          <hr>
    </div>

    <div class="card-block">
        <div class="table-responsive">
            <table id="dt_user" class="table table-striped table-bordered nowrap" style="width: 100%; font-size: 12px;">
                <thead>
                    <tr>
                        <th style="width: 36px;">
                        <div class="border-checkbox-section">   
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" onclick="checkAll()" value="all" name="cbDAll" type="checkbox" id="checkbox1">
                                <label class="border-checkbox-label" for="checkbox1" style="height: 4px;"></label>
                            </div>
                        </div>
                      </th>
                        <th>#</th>
                        <th></th>
                        <th>Room Name</th>
                        <th>Building Name</th>
                        <th>Desc</th>
                    </tr>
                </thead>
                   <tbody>
                    </tbody>
                <tfoot>
                    <tr style="width: 36px;">
                        <th></th>
                        <th>#</th>
                        <th></th>
                        <th>Room Name</th>
                        <th>Building Name</th>
                        <th>Desc</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
function checkAll(){
   if($("input[name=cbDAll]").is(":checked")){
    $("input[name=cbD]").prop("checked", true);

   }else{
     $("input[name=cbD]").prop("checked", false);
   }

}

function delUser(){
  var popUp = confirm("Are you sure you want to delete this entry??");
  if (popUp == true) {
    if($("input[name=cbD]").is(":checked")){
           $("input[name=cbD]:checked").map( function(){
            var id = $(this).val();
            //alert(id);

            $.ajax({
              type:"post",
              url:"../ajax/delete_room_sched.php",
              data:{
                id:id
              },
              success: function(data){
                //alert(data);
                if (data == 1) {
                  dt_room();
                   notify("top", "right", "fa fa-check", "success", "animated bounceInRight", "animated bounceOutRight","<b>Success!</b> "," Record deleted.");
                   $("input[name=cbDAll]").prop("checked",false);
                }
              }
            });
           });
    }else{
     notify("top", "right", "fa fa-check", "warning", "animated bounceInRight", "animated bounceOutRight","<b>Aw Snap!</b> "," No entry selected.");

    }
  }else{
    notify("top", "right", "fa fa-check", "warning", "animated bounceInRight", "animated bounceOutRight","<b>Aw Snap!</b> "," You've cancel it!");
  }
}
function editUser(id,rm,bid,floor_no,dg1,dg2,s1,s2,ns1,ns2,f,desc){
//alert(f);
$("#iddNi").val(id);
$("#room_name").val(rm);
$('#selectOpt option[value="'+bid+'"]').prop('selected', true);
$("#floor_no").val(floor_no);
$("#d_g1").val(dg1);
$("#d_g2").val(dg2);
$("#no_steps_1").val(s1);
$("#no_steps_2").val(s2);
$("#no_stairs_1").val(ns1);
$("#no_stairs_2").val(ns2);
$("#desc").val(desc);
$("#modalEdit").modal({
  backdrop: 'static',
  keyboard: false
});

$("#frmEditUser").submit(function(e){
	e.preventDefault();

	var url = "../ajax/edit_room_sched.php";
	var data = $(this).serialize();

	$.ajax({
		type:"post",
		url:url,
		data:data,
		success: function(data){
      //alert(data);
			if (data == 1) {
				dt_room();
				$("#modalEdit").modal("hide");
				 notify("top", "right", "fa fa-check", "success", "animated bounceInRight", "animated bounceOutRight","<b>Success!</b> "," Data has been updated.");
			}else{
				notify("top", "right", "fa fa-check", "danger", "animated bounceInRight", "animated bounceOutRight","<b>Aw Snap!</b> "," Something went wrong.");
			}
		}
	});
});

}

function btnShowPassword(){
 // alert('test');
    $("#password").attr('type', 'text');
}
function viewUser(id){
 // alert(id);
  $("#modalView").modal({
    backdrop: 'static',
    keyboard: false
  });
$.post("../ajax/view_room_sched.php",{
    id:id
  },function (data){
    var o = JSON.parse(data);
  //  alert(o.room);
   // $(".inpID").val(o.id);
    $(".room").html(o.room);
    $(".subject").html(o.subject);
    $(".from").html(o.st);
    $(".to").html(o.et);
    $(".teacher").html(o.teacher);

  });

}

function dt_room(){

  $("#dt_user").DataTable().destroy();
  $("#dt_user").dataTable({
    filter: true,
    "bSort": true,
    "ajax":{
      "url": "../ajax/datatables/dt_room_sched.php",
      "dataSrc":"data",
      "type":"POST"
    },
    "columns":[
   
    {
      "data":"cb"
    },
    {
      "data":"id"
    },
    {
      "mRender": function(data,type,row){
              return '<div class="dropdown-inverse dropdown open"><button class="btn btn-inverse dropdown-toggle waves-effect waves-light" type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog"></i></button>'+
                    '<div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">'+
                    // '<a class="dropdown-item waves-light waves-effect" onclick="viewUser('+row.id+')" href="#"><i class="zmdi zmdi-eye"></i> View Details</a>'+
                    '<a class="dropdown-item waves-light waves-effect" onclick="editUser('+row.id+',\''+row.rm+'\',\''+row.bid+'\',\''+row.floor_no+'\',\''+row.dg1+'\',\''+row.dg2+'\',\''+row.s1+'\',\''+row.s2+'\',\''+row.ns1+'\',\''+row.ns2+'\',\''+row.desc+'\')" href="#"><i class="zmdi zmdi-edit"></i> Edit Details</a>'+
              "</div></div>";
      }
    },
    {
      "data":"rm"
    },
    {
      "data":"building"
    },
    {
      "data":"desc"
    }],
    "createdRow": function(row, data, dataIndex){
        $(row).css('background','#dde6ff');
    }

});
}
 $(document).ready(function(){
    dt_room();
  $("#btnModalAdd").click(function(){

    $("#modalAdd").modal({
      backdrop: 'static',
      keyboard: false
    });

  });

});
</script>