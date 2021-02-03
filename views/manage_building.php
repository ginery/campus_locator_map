<?php require 'modals/add_building.php';?>
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
        <h5>Manage Buildings</h5>
        <span id="date_time"></span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.php?page=<?php echo url_page('home');?>">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="index.php?page=<?php echo url_page('manage-building');?>">Manage Buildings</a>
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
              url:"../ajax/delete_building.php",
              data:{
                id:id
              },
              success: function(data){
                alert(data);
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
function editUser(id,subject,teacher,select,st,et){
//alert(id);
$("#iddNi").val(id);
$("#start_time").val(st);
$("#end_time").val(et);
$("#subject").val(subject);
$("#teacher").val(teacher);
//alert(select);
$('#selectOpt option[value="'+select+'"]').prop('selected', true);
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
      "url": "../ajax/datatables/dt_building.php",
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
                    '<a class="dropdown-item waves-light waves-effect" onclick="viewUser('+row.id+')" href="#"><i class="zmdi zmdi-eye"></i> View Details</a>'+
                    '<a class="dropdown-item waves-light waves-effect" onclick="editUser()" href="#"><i class="zmdi zmdi-edit"></i> Edit Details</a>'+
              "</div></div>";
      }
    },
    {
      "data":"building_name"
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