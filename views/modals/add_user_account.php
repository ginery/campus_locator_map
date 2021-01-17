 <!-- Modal Add User-->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header"  style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Add User</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form id="frmAddUser">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" id="lname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" placeholder="Username" id="username" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" placeholder="Password" id="passowrd" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-sm-12">
                                <select name="role" class="form-control form-control-primary">
                                    <option value="0">Select Role</option>
                                    <option value="3">Teacher</option>
                                    <option value="4">Student</option>
                                    <option value="5">Staff</option>
                                    <option value="2">Visitor</option>
                                </select>
                        </div>
                        <br>
                        <hr>
                      <!--   <div class="col-md-12">
                        <div class="border-checkbox-section">   
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" name="staffU" type="checkbox" value="0" id="StaffU">
                                <label class="border-checkbox-label" for="StaffU">Staff?</label>
                            </div>
                        </div>
                      </div> -->
                
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
$("#frmAddUser").submit(function(e){
    e.preventDefault();
    var nFrom = "top";
    var nAlign = "right";
    var nIcons = "fa fa-check";
    var nType = "success";
    var nAnimIn = "animated bounceInRight";
    var nAnimOut = "animated bounceOutRight";

   
    var url = "../ajax/add_user_account.php";
    var data = $(this).serialize();

    $.ajax({
        type:"post",
        url: url,
        data:data,
        success: function(data){
            //alert(data);
            if (data == 1) {
                dt_user();
                $("#modalAdd").modal('hide');
                
                setTimeout(function(){
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,"<b>Success!</b> "," Record added to database.");
                },1000);
                $("#fname").val();
                $("#lname").val();
                $("#username").val();
                $("#password").val();
            }
        }
    });

});
</script>