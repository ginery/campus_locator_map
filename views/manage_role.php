<?php require 'modals/add_role.php';?>
<?php require 'modals/edit_role.php';?>
<div class="card borderless-card">
<div class="card-block inverse-breadcrumb">
    <div class="breadcrumb-header">
        <h5>Manage Role</h5>
        <span id="date_time"></span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.php?page=home">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="index.php?page=<?php echo url_page('manage-role');?>">Manage Role</a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="card">
    <div class="card-header" >
         <button type="button" style="float:right;" onclick="delRole()" class="btn btn-danger waves-effect" id="btnModalDelete">Delete</button>
         <button type="button" style="float:right; margin-right: 3px;" class="btn btn-info waves-effect" onclick="addRole()" id="btnModalAdd">Add</button>
         <br>
         <br>
          <hr>
    </div>

    <div class="card-block">
        <div class="table-responsive dt-responsive">
            <table id="dt_role" class="table table-striped table-bordered nowrap" style="width: 100%; font-size: 12px;">
                <thead>
                    <tr>
                        <th >
                        <div class="border-checkbox-section">   
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" onclick="checkAll()" value="all" name="cbDAll" type="checkbox" id="checkbox1">
                                <label class="border-checkbox-label" for="checkbox1" style="height: 4px;"></label>
                            </div>
                        </div>
                      </th>
                        <th>#</th>
                        <th></th>
                        <th>Role Name</th>
                        <th>Date Added</th>
                        <th>Encoded Added</th>
                    </tr>
                </thead>
                   <tbody>
                    </tbody>
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

function dt_role(){

  $("#dt_role").DataTable().destroy();
  $("#dt_role").dataTable({
    filter: true,
    "ajax":{
      "url": "../ajax/datatables/dt_role.php",
      "dataSrc":"data",
      "type":"POST"
    },
    "columns":[
   
    {
      "data":"cb"
    },
    {
      "data":"uid"
    },
    {
      "mRender": function(data,type,row){
              return '<div class="dropdown-inverse dropdown open"><button class="btn btn-inverse dropdown-toggle waves-effect waves-light" type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog"></i></button>'+
                    '<div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">'+
                    '<a class="dropdown-item waves-light waves-effect" onclick="editRole('+row.u_id+')" href="#"><i class="zmdi zmdi-edit"></i> Edit Details</a>'+
              "</div></div>";
      }
    },
    {
      "data":"role_name"
    },
    {
      "data":"date_added"
    }
    ,
    {
      "data":"encoded_by"
    }
    ],
    "createdRow": function(row, data, dataIndex){
        $(row).css('background','#dde6ff');
    }

});
}

function addRole(){
    $("#modalAdd").modal({
        backdrop: 'static',
        keyboard: false
    });

}
function editRole(id){
    $("#modalEdit").modal({
         backdrop: 'static',
            keyboard: false
    });
$.post("../ajax/getRole.php",{
    id:id
  },function (data){
    var o = JSON.parse(data);
  // alert(o.id);
    $("#roleID").val(o.id);
    $("#role_nameEdit").val(o.role_name);


  });
}
function delRole(){
  var popUp = confirm("Are you sure you want to delete this entry??");
  if (popUp == true) {
    if($("input[name=cbD]").is(":checked")){
           $("input[name=cbD]:checked").map( function(){
            var id = $(this).val();
            //alert(id);

            $.ajax({
              type:"post",
              url:"../ajax/delete_role.php",
              data:{
                id:id
              },
              success: function(data){
                //alert(data);
                if (data == 1) {
                  dt_role();
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
 $(document).ready(function(){
  dt_role();
});
</script>