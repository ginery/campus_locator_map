 <!-- Modal static-->
<div class="modal fade" id="modalView" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header" style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">User's Details</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="inpID" value="">
               <table style="width: 100%;">
                   <thead>
                    <tr style="background: #dce9ff;">
                       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">User's ID</th>
                        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">First Name</th>
                        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Last Name</th>
                        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Role</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr style="background: #eceff5;">
                       <td style="padding-left: 5px;" align="left"><span class='userID'>---</span></td>
                       <td style="padding-left: 5px;" align="left"><span class='userFname'>---</span></td>
                       <td style="padding-left: 5px;" align="left"><span class='userLname'>---</span></td>
                        <td style="padding-left: 5px;" align="left"><span class='userRole'>---</span></td>
                   </tr>
                   </tbody>
               </table>
               <hr>
               <div class="row">
               <div class="col-sm-6">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="basic-addon8"><i class="fa fa-user"></i></span>
                        <input type="text" disabled="" class="form-control" id="username" value="username">
                    </div>
                </div>
               <!--  <div class="col-sm-6">
                      <div class="input-group input-group-sm input-group-button">
                          <input type="text" disabled="" class="form-control" id="password" value="">
                          <span class="input-group-addon btn btn-primary mytooltip tooltip-effect-9" id="basic-addon10">
                              <span class=""><i class="fa fa-lock"></i></span>
                              <span class="tooltip-content3">Click to show <br> Password</span>
                          </span>
                      </div>
                  </div> -->
                </div>
            </div>
            <div class="modal-footer" style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <!-- <button type="submit" class="btn btn-primary waves-effect waves-light" >Submit</button> -->
            </div>
        </div>
    </div>
</div>
