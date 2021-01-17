 <!-- Modal static-->
<div class="modal fade" id="modalView" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header" style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Room Details</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="inpID" value="">
               <div class="table-responsive">
               <table style="width: 100%;" class="table table-bordered">
                   <thead>
                    <tr style="background: #dce9ff;">
                       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Room</th>
                       <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Subject</th>
                        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">From</th>
                        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">To</th>
                        <th style="padding-left: 5px; width: 135px; height: 19px; color: #202733;" align="left">Teacher</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr style="background: #eceff5;">
                      <td style="padding-left: 5px;" align="left"><span class='room'>---</span></td>
                      <td style="padding-left: 5px;" align="left"><span class='subject'>---</span></td>
                      <td style="padding-left: 5px;" align="left"><span class='from'>---</span></td>
                      <td style="padding-left: 5px;" align="left"><span class='to'>---</span></td>
                      <td style="padding-left: 5px;" align="left"><span class='teacher'>---</span></td>
                   </tr>
                   </tbody>
               </table>
             </div>
            
            </div>
            <div class="modal-footer" style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <!-- <button type="submit" class="btn btn-primary waves-effect waves-light" >Submit</button> -->
            </div>
        </div>
    </div>
</div>
