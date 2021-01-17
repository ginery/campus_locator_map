 <!-- Modal Add User-->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header"  style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Add Role</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form id="frmAddrole">
                    <?php 
                        if (getRole($_SESSION['role']) == "Developer") {
                    ?>
                        <input type="hidden" name="encoded_by" value="">
                    <?php
                            
                        }else{
                    ?>
                        <input type="hidden" name="encoded_by" value="<?= $_SESSION['user_id']?>">
                    <?php } ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-primary">
                                    <input type="text" name="role_name" class="form-control" placeholder="Role Name" id="role_name" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                        </div>
                
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
$("#frmAddrole").submit(function(e){
    e.preventDefault();

    var url = "../ajax/add_role.php";
    var data = $(this).serialize();

    $.ajax({
        type:"post",
        url: url,
        data:data,
        success: function(data){
           // alert(data);
            if (data == 1) {
                dt_role();
                $("#modalAdd").modal('hide');
                $("#role_name").val("");
                setTimeout(function(){
                notify("top", "right", "fa fa-check", "success", "animated bounceInRight", "animated bounceOutRight","<b>Success!</b> "," Record added to database.");
            },100);
            }
        }
    });

});
</script>