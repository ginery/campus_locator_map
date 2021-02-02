 <!-- Modal Add User-->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header"  style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Add Rooms</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form id="frmAddRoom">             
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="room_name" class="form-control" placeholder="Room Name" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <select name="building" style="height: 35px; padding-top: 5px;" class="form-control form-control">
                                    <option value="0">--Select Building--</option>
                                    <option value="1">Stgb Building</option>
                                </select>
                            </div>
                        </div>                    
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="d_g1" class="form-control" placeholder="Distance from Gate 1 (km)" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="text" name="d_g2" class="form-control" placeholder="Distance from Gate 2 (km)" id="lname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="number" name="no_steps_1" class="form-control" placeholder="No. of steps from Gate 2" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="number" name="no_steps_2" class="form-control" placeholder="No. of steps from Gate 2" id="lname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="number" name="no_stairs" class="form-control" placeholder="No. of stairs" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>                           
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-primary">
                                    <textarea  name="desc" class="form-control" placeholder="Description.." id="fname" style="text-transform: capitalize;"></textarea>
                                    <span class="form-bar"></span>
                                </div>
                            </div>                           
                        </div>
                        <hr>
                       
                
            </div>
            <div class="modal-footer" style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" >Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script type="text/javascript">
$("#frmAddRoom").submit(function(e){
    e.preventDefault();
    var nFrom = "top";
    var nAlign = "right";
    var nIcons = "fa fa-check";
    var nType = "success";
    var nAnimIn = "animated bounceInRight";
    var nAnimOut = "animated bounceOutRight";

   
    var url = "../ajax/add_room_sched.php";
    var data = $(this).serialize();

    $.ajax({
        type:"post",
        url: url,
        data:data,
        success: function(data){
            //alert(data);
            if (data == 1) {
                dt_room();
                $("#modalAdd").modal('hide');
                // $("#fname").val("");
                //  $("#lname").val("");
            setTimeout(function(){
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,"<b>Success!</b> "," Record added to database.");
            },100);
            // setTimeout(function(){
            //     location.reload();
            // },500);
            }
        }
    });

});
</script>