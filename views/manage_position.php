<?php require 'modals/add_position.php';?>
<?php require 'modals/edit_position.php';?>

<div class="card borderless-card">
<div class="card-block inverse-breadcrumb">
    <div class="breadcrumb-header">
        <h5>Manage Position</h5>
        <span id="date_time"></span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.php?page=<?php echo url_page('home');?>">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="index.php?page=<?php echo url_page('manage-position');?>">Manage Position</a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="card">
    <div class="card-header" >
         <button type="button" style="float:right;"  class="btn btn-danger waves-effect" onclick="delPosition()" id="btnModalDelete">Delete</button>
         <button type="button" style="float:right; margin-right: 3px;" class="btn btn-info waves-effect" onclick="addPosition()" id="btnModalAdd">Add</button>
         <br>
         <br>
          <hr>
    </div>

    <div class="card-block">
        <div class="table-responsive dt-responsive">
            <table id="dt_position" class="table table-striped table-bordered nowrap"  style="width: 100%; font-size: 12px;">
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
                        <th>Branch name</th>
                        <th>Date Added</th>
                        <th>Encoded By</th>
                    </tr>
                </thead>
                   <tbody>
                    </tbody>
                <tfoot>
                    <tr style="width: 36px;">
                        <th></th>
                        <th>#</th>
                        <th></th>
                        <th>Branch name</th>
                        <th>Date Added</th>
                        <th>Encoded By</th>
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
function addPosition(){
    $("#modalAdd").modal({
        backdrop: 'static',
        keyboard: false
    });

}
function editPosition(id){
    $("#modalEdit").modal({
         backdrop: 'static',
            keyboard: false
    });
$.post("../ajax/getPosition.php",{
    id:id
  },function (data){
    var o = JSON.parse(data);
  // alert(o.id);
    $("#position_nameID").val(o.id);
    $("#position_nameEdit").val(o.position_name);


  });
}

function delPosition(){
  var popUp = confirm("Are you sure you want to delete this entry??");
  if (popUp == true) {
    if($("input[name=cbD]").is(":checked")){
           $("input[name=cbD]:checked").map( function(){
            var id = $(this).val();
            //alert(id);

            $.ajax({
              type:"post",
              url:"../ajax/delete_position.php",
              data:{
                id:id
              },
              success: function(data){
                //alert(data);
                if (data == 1) {
                  dt_position();
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
function dt_position(){

  $("#dt_position").DataTable().destroy();
  $("#dt_position").dataTable({
    filter: true,
    "bSort": true,
    "ajax":{
      "url": "../ajax/datatables/dt_position.php",
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
                    '<a class="dropdown-item waves-light waves-effect" onclick="editPosition('+row.u_id+')" href="#"><i class="zmdi zmdi-edit"></i> Edit Details</a>'+
              "</div></div>";
      }
    },
    {
      "data":"position_name"
    },
    {
      "data":"date_added"
    },
    {
      "data":"encoded_by"
    }
    ],
    "createdRow": function(row, data, dataIndex){
        $(row).css('background','#dde6ff');
    }

});
}
$(document).ready(function(){
    dt_position();
});
</script>