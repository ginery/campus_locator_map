 <!-- Modal static-->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header"  style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Edit User</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form id="frmEditUser">
                    <div>
                        <input type="hidden" name="id" value="" id="iddNi">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="fname" class="form-control" id="fnameEdit" placeholder="First Name" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="lname" class="form-control" id="lnameEdit" placeholder="Last Name" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <select name="role" class="form-control form-control-primary" id="selectOpt">
                                    <option value="0">Select Role</option>
                                    <option value="4">Student</option>
                                    <option value="3">Teacher</option>
                                    <option value="5">Staff</option>
                                    <option value="2">Visitor</option>   
                                </select>
                            </div>

                            <hr>
<!-- 
		                      <div class="col-sm-12" style="margin-top: 21px; border-top: 1px solid #ccc; padding-top: 6px;">
		                        <div class="border-checkbox-section">   
		                            <div class="border-checkbox-group border-checkbox-group-primary">
		                                <input class="border-checkbox"  value="1" name="MA" type="checkbox" id="MA">
		                                <label class="border-checkbox-label" for="MA">Authorize Master Data?</label>
		                            </div>
		                        </div>
		                        <div class="border-checkbox-section">   
		                            <div class="border-checkbox-group border-checkbox-group-primary">
		                                <input class="border-checkbox"  value="1" name="MA" type="checkbox" id="PP">
		                                <label class="border-checkbox-label" for="PP">Authorize Purchasing?</label>
		                            </div>
		                        </div>
		                        <div class="border-checkbox-section">   
		                            <div class="border-checkbox-group border-checkbox-group-primary">
		                                <input class="border-checkbox"  value="1" name="MA" type="checkbox" id="MD">
		                                <label class="border-checkbox-label" for="MD">Authorize to Manage Data?</label>
		                            </div>
		                        </div>
		                    </div> -->
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
