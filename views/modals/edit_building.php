 <!-- Modal static-->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header"  style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Edit Building</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
         <form id="frmEditUser">    
            <div class="modal-body">
            <div class="row">
            <input type="hidden" id="iddNi" name="id" >
                            <div class="col-sm-12">
                                <div class="form-group form-primary">
                                    <input type="text" name="building_name" class="form-control" placeholder="Building Name" id="building_name" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                                                      
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="d_g1" class="form-control" placeholder="Distance from Gate 1 (km)" id="d_g1" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="d_g2" class="form-control" placeholder="Distance from Gate 2 (km)" id="d_g22" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                                                       
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="number" name="no_steps_1" class="form-control" placeholder="No. of steps from Gate 1" id="no_steps_1" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="number" name="no_steps_2" class="form-control" placeholder="No. of steps from Gate 2" id="no_steps_2" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">                            
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="number" name="floor_no" class="form-control" placeholder="Number of floor" id="floor_no" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>                           
                        </div> 
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-primary">
                                    <textarea  name="desc" class="form-control" placeholder="Description.." id="desc" style="text-transform: capitalize;"></textarea>
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
