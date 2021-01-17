 <!-- Modal Add User-->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: 3px solid #4e4e4e;">
            <div class="modal-header"  style="padding: 5px; background: #f3f3f3; border-bottom: 1px solid #4e4e4e;">
                <h4 style="font-size: 17px;" class="modal-title">Add Schedule</h4>
                <button type="button" style="margin-top: 0; margin-right: 6px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
            </div>
            <div class="modal-body">
                <form id="frmAddRoom">             
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="time" name="start_time" class="form-control" placeholder="Start Time" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="time" name="end_time" class="form-control" placeholder="End Time" id="lname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="float: right;">
                            <select name="room" class="form-control form-control-primary">
                                <option value="0">--Select Room--</option>
                                <option value="1">Stgb 1</option>
                                <option value="2">Stgb 2</option>
                                <option value="3">Stgb 3</option>
                                <option value="4">Stock Room</option>
                                <option value="5">Conference Room</option>
                                <option value="6">Stgb 7</option>
                                <option value="7">Stgb 8</option>
                                <option value="8">Stgb 9</option>
                                <option value="9">Stgb 10</option>
                                <option value="10">Stgb 11</option>
                                <option value="11">Stgb 12</option>
                                <option value="12">LB -1 Room 102 – Food Trades Tech. Laboratory Room 1</option>
                                <option value="13">LB -1 Room 103 – Food Trades Tech. Lecture Room 1</option>
                                <option value="14">LB -1 Room 104 – Food Trades Tech. Laboratory Room 2</option>
                                <option value="15">LB -1 Room 105 – Food Trades Tech. Lecture Room 2</option>
                          
                                <option value="16">LB -1 Room 201 – ELX/ELC Lecture Room 1</option>
                                <option value="17">LB -1 Room 202 – ELX/ELC Laboratory Room 1</option>
                                <option value="18">LB -1 Room 203 – PLC Laboratory Room</option>
                                <option value="19">LB -1 Room 204 – ELX/ELC Laboratory Room 2</option>
                                <option value="20">LB -1 Room 205 - ELX/ELC Lecture Room 2</option>
                           
                                <option value="21">LB -1 Room 301 – Drafting Tech. Laboratory Room 1</option>
                                <option value="22">LB -1 Room 302 – Drafting Tech. Laboratory Room 2</option>
                                <option value="23">LB -1 Room 303 – Drafting Tech. Laboratory Room 3</option>
                                <option value="24">LB -1 Room 304 – Drafting Tech. Laboratory Room 4</option>
                                <option value="25">LB -1 Room 305 – CAD Laboratory Room</option>
                                <option value="26">MT-1 Food Trades Technology</option>
                                <option value="27">ComLab 1</option>
                                <option value="28">Room 3A</option>
                                <option value="29">Room 3B</option>
                                <option value="30">Room 3C</option>
                                <option value="31">Room 3D</option>
                                <option value="32">Room 3E</option>
                                <option value="33">Room 3F</option>
                                <option value="34">Room 3G</option>
                                <option value="35">Room 3H</option>
                                <option value="36">Room 3I</option>
                                <option value="37">Room 3J</option>
                                <option value="39">AB - 1 Room 102</option>
                                <option value="40">AB - 1 Room 103</option>
                                <option value="41">AB - 1 Room 104</option>
                                <option value="42">AB - 1 Room 105</option>
                                <option value="43">AB - 1 Room 106 – Student Function Room</option>
                                <option value="44">AB - 1 Room 207</option>
                                <option value="45">AB - 1 Room 208</option>
                                <option value="46">AB - 1 Room 2010</option>
                                <option value="47">AB - 1 Room 2011 – Extension Office</option>
                                <option value="48">MM1</option>
                                <option value="49">MM2</option>
                                <option value="50">MM3</option>
                                <option value="51">MM4</option>
                                <option value="59">TVEP Room</option>
                                <option value="60">Automotive Room</option>
                                <option value="61">Mechanical Room</option>
                                <option value="52">Deans Office</option>
                                <option value="53">OSA</option>
                                <option value="54">Guidance Office</option>
                                <option value="55">Registrar Office</option>
                                <option value="58">IC</option>
                                <option value="56">Assessment/Casher</option>
                                <option value="57">Library</option>
                                
                            </select>
                        
                        </div>
                        <br style="clear: both;">
                         <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-primary">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" id="fname" style="text-transform: capitalize;">
                                    <span class="form-bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="float: left;">
                                <div class="form-group form-primary">
                                    <input type="text" name="teacher" class="form-control" placeholder="Teacher Name" id="lname" style="text-transform: capitalize;">
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
           // alert(data);
            if (data == 1) {
                dt_room();
                $("#modalAdd").modal('hide');
                // $("#fname").val("");
                //  $("#lname").val("");
            setTimeout(function(){
                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,"<b>Success!</b> "," Record added to database.");
            },100);
            setTimeout(function(){
                location.reload();
            },500);
            }
        }
    });

});
</script>