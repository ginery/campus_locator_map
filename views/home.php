<?php require 'modals/room_information.php';?>
<?php require 'modals/view_building_info.php';?>
<style type="text/css">
.room_hover{
    border: 2px solid red;
}
.line_map:hover{
    border: 2px solid red !important;
    cursor: pointer;
}
.line_map:active{
    border: 2px solid white !important;
    cursor: pointer;
}
.active{
    border: 2px solid white !important;
}
#road_line{
    border: 2px solid #000000;
    background: #909090;
}
#livesearch{
    border: 1px solid #ccc;
    margin-top: -17px;
    color: #01a9ac;
    background: #eaeaea;
    display: none;
    cursor: pointer;
}

</style>

<div class="row" style="">

    <div class="col-md-12" style="background: white;">
        <br>
        <center>

            <div class="input-group input-group-button input-group-primary">
                <input type="text" class="form-control" id="searchF" onkeyup="searchF(this.value)" placeholder="Search here...">
                <!-- <input type="text" class="form-control" id="searchF1"  placeholder="Speak Now"> -->
                <button type="button" class="btn btn-primary input-group-addon" id="btnVoice"><i class="fa fa-microphone"></i></button>
            </div>
            <input type="hidden" id="inpLivesearch" >
             <input type="hidden" id="schedID" >
            <div id="livesearch" onclick="liveseachResult()"></div>
            <!-- <div class="testdiv"></div> -->
        </center>
            <h2 style="padding: 8px; color: #848080;">Campus Locator Map</h2>
            <span id="date_time"></span>
            
            <input type="hidden" name="" id="realTime">
            <hr>
            <div class="col-sm-4" id="selectRooms" style="display: none;">
                <select class="js-example-basic-single col-sm-12" id="roomID">
                    <optgroup label="Stgb Bldg 1st Floor">
                        <option value="0">--Select Room--</option>
                        <option value="1">Stgb 1</option>
                        <option value="2">Stgb 2</option>
                        <option value="3">Stgb 3</option>
                        <option value="4">Stock Room</option>
                        <option value="5">Conference Room</option>
                        <option value="52">Deans Office</option>
                    </optgroup>
                    <optgroup label="Stgb Bldg 2nd Floor">
                        <option value="6">Stgb 7</option>
                        <option value="7">Stgb 8</option>
                        <option value="8">Stgb 9</option>
                        <option value="9">Stgb 10</option>
                        <option value="10">Stgb 11</option>
                        <option value="11">Stgb 12</option>
                    </optgroup>
                    <optgroup label="Laboratory Bldg 1st Floor">
                        <option value="12">LB -1 Room 102 – Food Trades Tech. Laboratory Room 1</option>
                        <option value="13">LB -1 Room 103 – Food Trades Tech. Lecture Room 1</option>
                        <option value="14">LB -1 Room 104 – Food Trades Tech. Laboratory Room 2</option>
                        <option value="15">LB -1 Room 105 – Food Trades Tech. Lecture Room 2</option>
                    </optgroup>
                    <optgroup label="Laboratory Bldg 2nd Floor">
                        <option value="16">LB -1 Room 201 – ELX/ELC Lecture Room 1</option>
                        <option value="17">LB -1 Room 202 – ELX/ELC Laboratory Room 1</option>
                        <option value="18">LB -1 Room 203 – PLC Laboratory Room</option>
                        <option value="19">LB -1 Room 204 – ELX/ELC Laboratory Room 2</option>
                        <option value="20">LB -1 Room 205 - ELX/ELC Lecture Room 2</option>
                    </optgroup>
                    <optgroup label="Laboratory Bldg 3rd Floor">
                        <option value="21">LB -1 Room 301 – Drafting Tech. Laboratory Room 1</option>
                        <option value="22">LB -1 Room 302 – Drafting Tech. Laboratory Room 2</option>
                        <option value="23">LB -1 Room 303 – Drafting Tech. Laboratory Room 3</option>
                        <option value="24">LB -1 Room 304 – Drafting Tech. Laboratory Room 4</option>
                        <option value="25">LB -1 Room 305 – CAD Laboratory Room</option>
                    </optgroup>
                    <optgroup label="Computer Building 1st Floor">
                        <option value="26">MT-1 Food Trades Technology</option>
                    </optgroup>
                    <optgroup label="Computer Building 2nd Floor">
                        <option value="27">ComLab 1</option>
                    </optgroup>
                    <optgroup label="Academic 1">
                        <option value="28">Room 3A</option>
                        <option value="29">Room 3B</option>
                        <option value="30">Room 3C</option>
                        <option value="31">Room 3D</option>
                        <option value="32">Room 3E</option>
                    </optgroup>
                    <optgroup label="Academic 2">
                        <option value="33">Room 3F</option>
                        <option value="34">Room 3G</option>
                        <option value="35">Room 3H</option>
                        <option value="36">Room 3I</option>
                        <option value="37">Room 3J</option>
                    </optgroup>
                    <optgroup label="Drafing Building 1st Floor">
                        <option value="38">AB - 1 Room 101 – Conference Room</option>
                        <option value="39">AB - 1 Room 102</option>
                        <option value="40">AB - 1 Room 103</option>
                        <option value="41">AB - 1 Room 104</option>
                        <option value="42">AB - 1 Room 105</option>
                        <option value="43">AB - 1 Room 106 – Student Function Room</option>
                    </optgroup>
                    <optgroup label="Drafing Building 2nd Floor">
                        <option value="44">AB - 1 Room 207</option>
                        <option value="45">AB - 1 Room 208</option>
                        <option value="46">AB - 1 Room 2010</option>
                        <option value="47">AB - 1 Room 2011 – Extension Office</option>
                    </optgroup>
                    <optgroup label="MM Building">
                        <option value="48">MM1</option>
                        <option value="49">MM2</option>
                        <option value="50">MM3</option>
                        <option value="51">MM4</option>
                    </optgroup>
                    <optgroup label="TVEP Building">
                        <option value="59">TVEP Room</option>
                       
                    </optgroup>
                    <optgroup label="Automotive Building">
                        <option value="60">Automotive Room</option>
                    </optgroup>
                    <optgroup label="Mechanical Building">
                        <option value="61">Mechanical Room</option>
                    </optgroup>
                </select>
            </div>

            <div class="col-sm-4" id="selectAdmin" style="display: none;">
                <select class="js-example-basic-single col-sm-12" id="adminID">
                    <optgroup label="Admin Bldg 1st Floor">
                        <option value="0">--Select Room--</option>
                        <!-- <option value="54">Guidance Office</option> -->
                        <option value="55">Registrar Office</option>
                        <option value="56">Assessment/Casher</option>
                    </optgroup>
                     <!-- <optgroup label="Admin Bldg 2nd Floor">
                        <option value="57">Library</option>
                    </optgroup> -->
                     <!-- <optgroup label="Drafting Building 2nd Floor">
                        <option value="53">OSA</option>
                     </optgroup>
                     <optgroup label="STGB Building 1st Floor">
                        <option value="52">Deans Office</option>
                     </optgroup>
                     <optgroup label="Mechanical Building">
                        <option value="62">Research Office</option>
                    </optgroup>
                    <optgroup label="TVEP Building 2nd Floor">
                         <option value="63">OJT Office</option>
                    </optgroup>
                     <optgroup label="Academic 2 Building">                         
                        <option value="64">SSG Office</option>
                    </optgroup> -->
                   
                    
                </select>
            </div>
            <div class="col-sm-4" id="selectFaculty" style="display: none;">
                <select class="js-example-basic-single col-sm-12" id="facultyID">
                    <optgroup label="Admin Bldg 1st Floor">
                        <option value="0">--Select Room--</option>
                        <option value="65">Faculty Office</option>
                        <option value="67">NSTP Office</option>
                    </optgroup>
                     <optgroup label="Computer Building 2nd Floor">                        
                        <option value="58">ICT</option>
                    </optgroup>
                     <optgroup label="Laboratory Bldg 1st Floor">                         
                        <option value="66">Physical Plant development & Mgt.</option>
                    </optgroup>
                   
                    
                </select>
            </div>
            <div class="col-sm-4" id="selectOther" onclick="getOther()" style="display: none;">
                <select class="js-example-basic-single col-sm-12" id="OtherID">
                    <option value="0">--Select Room--</option>
                    <optgroup label="Clinic">                        
                        <option value="74">Clinic</option>
                    </optgroup>
                    <optgroup label="Admin Bldg 1st Floor">
                        <option value="68">AVR</option>
                    </optgroup>
                    <optgroup label="Computer Building 1st Floor">
                        <option value="69">Canteen</option>
                    </optgroup>
                     <optgroup label="Alumni Building">
                        <option value="70">Alumni Building</option>
                    </optgroup>
                    <optgroup label="PTA Hall">
                        <option value="71">PTA Hall</option>
                    </optgroup>
                    <optgroup label="Mechanical Building">
                        <option value="72">Technopacer Office</option>
                    </optgroup>
                   <optgroup label="Mechanical Building">
                        <option value="73">RCY Office</option>
                    </optgroup>
                    
                </select>
            </div>
            <hr>
            
    </div>
    <div class="col-md-12" style="background: #a2f1a8; overflow: auto; ">
        <div style="width: 1032px; height: inherit;  background: #a2f1a8;">
            <!-- map image -->
           <img src="../assets/images/chmsc_map.png" style="width: 1020px; float: left; z-index: -1">
           <!-- map lines -->
            <div class="line_map stgb" onclick="stgbBldg()" style="position: absolute; float: left;border: 2px solid #ffea58; width: 175px; height: 66px; margin-left: 72px; margin-top: 18px;" data-toggle="tooltip" data-placement="bottom" title="Stgb Building"></div>
            <div class="line_map 3_storey_lab" onclick="three_storeyBldg()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 199px; height: 46px; margin-left: 247px; margin-top: 29px;" data-toggle="tooltip" data-placement="bottom" title="Three Storey Laboratory Building"></div>
            <div class="line_map" style="position: absolute; float: left; border: 2px solid #ffea58; width: 133px; height: 46px; margin-left: 446px; margin-top: 29px;" data-toggle="tooltip" data-placement="bottom" title="Three Storey Laboratory Building(Proposed)"></div>
            <div class="line_map comLab" onclick="comLab()" style="position: absolute; float: left; border: 2px solid #ffea58;width: 80px; height: 58px; margin-left: 579px; margin-top: 29px;" data-toggle="tooltip" data-placement="bottom" title="Computer Laboratory"></div>
            <div class="line_map tvepBuilding" onclick="tvepBuilding()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 53px; height: 126px; margin-left: 462px; margin-top: 148px;" data-toggle="tooltip" data-placement="left" title="TVEP Building"></div>
            <div class="line_map cr" onclick="cr()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 33px; height: 34px; margin-left: 430px; margin-top: 278px;" data-toggle="tooltip" data-placement="left" title="Comfort Room"></div>
            <div class="line_map autoBldg" onclick="autoBldg()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 42px; height: 124px; margin-left: 529px; margin-top: 155px;" data-toggle="tooltip" data-placement="bottom" title="Automotive Building"></div>
            <div class="line_map mechBldg" onclick="mechBldg()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 42px; height: 124px; margin-left: 603px; margin-top: 155px;" data-toggle="tooltip" data-placement="bottom" title="Mechanical Building"></div>
            <div class="line_map draftingBldg" onclick="draftingBldg()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 59px; height: 148px;   margin-left: 696px; margin-top: 155px;" data-toggle="tooltip" data-placement="right" title="Drafting Building"></div>
            <div class="line_map academic_2_bldg" onclick="academic2Bldg()" style="position: absolute; float: left; border: 2px solid #ffea58;width: 54px; height: 154px; margin-left: 447px; margin-top: 322px;" data-toggle="tooltip" data-placement="top" title="Academic 2"></div>
            <div class="line_map academic_1_bldg" onclick="academic1Bldg()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 54px; height: 154px; margin-left: 591px; margin-top: 322px;" data-toggle="tooltip" data-placement="top" title="Academic 1"></div>

            <div class="line_map adminBuilding" onclick="adminBldg()" style="position: absolute;  float: left; border: 2px solid #ffea58;width: 258px; height: 41px; margin-left: 403px; margin-top: 476px;" data-toggle="tooltip" data-placement="bottom" title="Admin Building"></div>

            <div class="line_map mrf" onclick="mrf()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 101px;  height: 34px; margin-left: 34px; margin-top: 507px;" data-toggle="tooltip" data-placement="bottom" title="MRF"></div>
            <div class="line_map mm12Bldg" onclick="mm12Bldg()" style="position: absolute; float: left;border: 2px solid #ffea58; width: 35px; height: 47px;margin-left: 705px; margin-top: 329px;" data-toggle="tooltip" data-placement="right" title="MM1 & 2 Building"></div>
            <div class="line_map mm34Bldg" onclick="mm34Bldg()" style="position: absolute; float: left; border: 2px solid #ffea58;width: 35px; height: 47px; margin-left: 705px; margin-top: 381px;" data-toggle="tooltip" data-placement="right" title="MM3 & 4 Building"></div>
             <div class="line_map court" style="position: absolute; float: left; border: 2px solid #ffea58; width: 90px; height: 154px; margin-left: 501px; margin-top: 322px;" data-toggle="tooltip" data-placement="top" title="Covered Court"></div>
             <div class="line_map clinic" onclick="clinic()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 35px;  height: 24px; margin-left: 705px; margin-top: 304px;" data-toggle="tooltip" data-placement="left" title="Clinic"></div>
             <div class="line_map alumni" onclick="alumni()" style="position: absolute; float: left; border: 2px solid #ffea58; width: 35px;height: 24px; margin-left: 743px; margin-top: 304px;" data-toggle="tooltip" data-placement="right" title="Alumni Building"></div>
             <div class="line_map farm" style="position: absolute;  float: left;  border: 2px solid #ffea58; width: 90px;  height: 111px;  margin-left: 754px;  margin-top: 338px;" data-toggle="tooltip" data-placement="right" title="Veggie Farm"></div>
             <div class="line_map boys_dorm" style="position: absolute;  float: left; border: 2px solid #ffea58; width: 90px;  height: 146px;  margin-left: 836px;  margin-top: 156px;" data-toggle="tooltip" data-placement="right" title="Boys Dormitory"></div>
             <div class="line_map service_center" style="position: absolute;  float: left; border: 2px solid #ffea58;  width: 32px;  height: 124px;  margin-left: 571px; margin-top: 155px;" data-toggle="tooltip" data-placement="bottom" title="Service Center"></div>
              <div class="line_map  ptaHall" onclick="ptaHall()" style="    position: absolute; float: left; border: 2px solid #ffea58; width: 19px;  height: 18px; margin-left: 512px; margin-top: 254px;" data-toggle="tooltip" data-placement="bottom" title="PTA Hall"></div>
              <div class="" id="road_line" style="position: absolute; float: left;  width: 655px; height: 20px; margin-left: 33px; margin-top: 88px;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <!-- road lines -->
              <div class="" id="road_line" style="position: absolute; float: left; width: 23px;height: 540px; margin-left: 663px; margin-top: 32px;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style="position: absolute;float: left;width: 14px; height: 49px;margin-left: 635px; margin-top: 106px; border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style=" position: absolute;float: left;width: 19px; height: 16px; margin-left: 663px; margin-top: 90px; border: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style="position: absolute; float: left; width: 14px; height: 43px; margin-left: 635px; margin-top: 279px; border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style=" position: absolute;float: left;width: 14px;height: 48px; margin-left: 485px;margin-top: 274px;  border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style="position: absolute;float: left;width: 140px; height: 15px;margin-left: 497px; margin-top: 285px;border-right: 2px solid #e6aa00;border-left: 2px solid #e6aa00;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style="position: absolute; float: left; width: 14px; height: 15px;margin-left: 515px;margin-top: 272px;border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style="position: absolute;float: left;width: 21px; height: 15px; margin-left: 684px; margin-top: 303px; border-left: 0;border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style="position: absolute; float: left; width: 70px; height: 14px; margin-left: 778px; margin-top: 303px; border-left: 0;border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              <div class="" id="road_line" style=" position: absolute; float: left;  width: 15px; height: 13px; margin-left: 834px;margin-top: 302px; border-left: 0; border-bottom: 0; border-top: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
               
               <div class="" id="road_line" style="position: absolute;float: left; width: 26px; height: 67px; margin-left: 135px; margin-top: 483px; border-bottom-left-radius: 15px;  border-top-right-radius: 15px;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
               <div class="" id="road_line" style="position: absolute;float: left;width: 506px;height: 23px; margin-left: 159px; margin-top: 527px; border-right: 0;border-left: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
                <div class="" id="road_line" style="position: absolute; float: left; width: 106px; height: 24px;margin-left: 31px;  margin-top: 483px; border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
                <div class="" id="road_line" style="position: absolute; float: left; width: 24px;height: 14px; margin-left: 463px; margin-top: 292px; border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

        </div>
       
    </div>
</div>
<script type="text/javascript" src="..\lib\assets\js\speechtotext.js"></script>
<script type="text/javascript">

function searchF(val){
   var time = $("#realTime").val();
   // alert(val);
    if (val.length==0) {
    document.getElementById("searchF").innerHTML="";
    $("#livesearch").hide();
     $("#inpLivesearch").val("");
     $("#schedID").val("");
    return;
    }
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          // document.getElementById("livesearch").innerHTML=this.responseText;
          // document.getElementById("livesearch").style.border="1px solid #A5ACB2";
       
            var o = JSON.parse(xmlhttp.response);
           // getInfo(time, o.room_id);
            //$("#modalInfo").modal();
          // alert(xmlhttp.response);
            if (o.room != null ){
                $("#livesearch").show();
                $("#livesearch").html(o.room);
                $("#inpLivesearch").val(o.room_id);
                $("#schedID").val(o.id);

            }else{
                $("#livesearch").show();
                //$('#livesearch').prop('onclick',null);
                //$('#livesearch').css('cursor','disable');
                $("#livesearch").html("No result found.");

            }
        }
      }
      xmlhttp.open("GET","../ajax/searchroom.php?id="+val,true);
      xmlhttp.send();
}
function liveseachResult(){
    var txt = $("#livesearch").text();
    if(txt != 'No result found.'){
    //alert(txt);
    var id =  $("#schedID").val();
    var time = $("#realTime").val();
    var room_id = $("#inpLivesearch").val()
    getInfo(time, room_id);
    getBuildingName(id);
    $("#modalInfo").modal();
    }
    
   
}
function getBuildingName(id){

    $.ajax({
        type: "post",
        url: "../ajax/getBuildingName.php",
        data: {
            id: id
        },
        success: function(data){
            $(".roomName").text(data);
        }

    });
}
function getRoom(){
    var time = $("#realTime").val();
    $("#selectRooms").fadeIn();
    $("#selectAdmin").hide();
    $("#selectFaculty").hide();
    $("#selectOther").hide();
    $('#roomID').on('change', function() {
       var selectval = this.value;
            if (selectval == "1") {
                getInfo(time, 1);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 1");

            }else if (selectval == "2") {
                getInfo(time, 2);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 2");

            }else if (selectval == "3") {
                getInfo(time, 3);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 3");

            }else if (selectval == "4") {
                getInfo(time, 4);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stock Room");

            }else if (selectval == "5") {
                getInfo(time, 5);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Conference Room");

            }else if (selectval == "6") {
                getInfo(time, 6);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 7");

            }else if (selectval == "7") {
                getInfo(time, 7);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 8");

            }else if (selectval == "8") {
                getInfo(time, 8);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 9");

            }else if (selectval == "9") {
                getInfo(time, 9);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 10");

            }else if (selectval == "10") {
                getInfo(time, 10);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 11");

            }else if (selectval == "11") {
                getInfo(time, 11);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Stgb 12");

            }else if (selectval == "12") {
                getInfo(time, 12);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 102 – Food Trades Tech. Laboratory Room 1");

            }else if (selectval == "13") {
                getInfo(time, 13);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 103 – Food Trades Tech. Lecture Room 1");

            }else if (selectval == "14") {
                getInfo(time, 14);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 104 – Food Trades Tech. Laboratory Room 2");

            }else if (selectval == "15") {
                getInfo(time, 15);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 105 – Food Trades Tech. Lecture Room 2");

            }else if (selectval == "16") {
                getInfo(time, 16);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 201 – ELX/ELC Lecture Room 1");

            }else if (selectval == "17") {
                getInfo(time, 17);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 202 – ELX/ELC Laboratory Room 1");

            }else if (selectval == "18") {
                getInfo(time, 18);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 203 – PLC Laboratory Room");

            }else if (selectval == "19") {
                getInfo(time, 19);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 204 – ELX/ELC Laboratory Room 2");

            }else if (selectval == "20") {
                getInfo(time, 20);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 205 - ELX/ELC Lecture Room 2");

            }else if (selectval == "21") {
                getInfo(time, 21);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 301 – Drafting Tech. Laboratory Room 1");

            }else if (selectval == "22") {
                getInfo(time, 22);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 302 – Drafting Tech. Laboratory Room 2");

            }else if (selectval == "23") {
                getInfo(time, 23);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 303 – Drafting Tech. Laboratory Room 3");

            }else if (selectval == "24") {
                getInfo(time, 24);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 304 – Drafting Tech. Laboratory Room 4");

            }else if (selectval == "25") {
                getInfo(time, 25);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("LB -1 Room 305 – CAD Laboratory Room");

            }else if (selectval == "26") {
                getInfo(time, 26);
                $(".com_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("MT-1 Food Trades Technology");

            }else if (selectval == "27") {
                getInfo(time, 27);
                $(".com_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("ComLab 1");

            }else if (selectval == "28") {
                getInfo(time, 28);
                $(".academic_2_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3A");

            }else if (selectval == "29") {
                getInfo(time, 29);
                $(".academic_2_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3B");

            }else if (selectval == "30") {
                getInfo(time, 30);
                $(".academic_2_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3C");

            }else if (selectval == "31") {
                getInfo(time, 31);
                $(".academic_2_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3D");

            }else if (selectval == "32") {
                getInfo(time, 32);
                $(".academic_2_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3E");

            }else if (selectval == "33") {
                getInfo(time, 33);
                $(".academic_1_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3F");

            }else if (selectval == "34") {
                getInfo(time, 34);
                $(".academic_1_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3G");

            }else if (selectval == "35") {
                getInfo(time, 35);
                $(".academic_1_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3H");

            }else if (selectval == "36") {
                getInfo(time, 36);
                $(".academic_1_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3I");

            }else if (selectval == "37") {
                getInfo(time, 37);
                $(".academic_1_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Room 3J");

            }else if (selectval == "38") {
                getInfo(time, 38);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 101 – Conference Room");

            }else if (selectval == "39") {
                getInfo(time, 39);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 102 – Conference Room");

            }else if (selectval == "40") {
                getInfo(time, 40);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 103 – Conference Room");

            }else if (selectval == "41") {
                getInfo(time, 41);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 104 – Conference Room");

            }else if (selectval == "42") {
                getInfo(time, 42);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 105 – Conference Room");

            }else if (selectval == "43") {
                getInfo(time, 43);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 106 – Student Function Room");

            }else if (selectval == "43") {
                getInfo(time, 43);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 207 – Conference Room");

            }else if (selectval == "44") {
                getInfo(time, 44);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 208 – Conference Room");

            }else if (selectval == "45") {
                getInfo(time, 45);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 2010 – Conference Room");

            }else if (selectval == "46") {
                getInfo(time, 46);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 2011 – Extension Office");

            }else if (selectval == "47") {
                getInfo(time, 47);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("AB - 1 Room 101 – Conference Room");

            }else if (selectval == "48") {
                getInfo(time, 48);
                $(".mm12Bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("MM1");

            }else if (selectval == "49") {
                getInfo(time, 49);
                $(".mm12Bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("MM2");

            }else if (selectval == "50") {
                getInfo(time, 50);
                $(".mm34Bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("MM3");

            }else if (selectval == "51") {
                getInfo(time, 51);
                $(".mm34Bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("MM4");

            }else if (selectval == "52") {
                getInfo(time, 52);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Deans Office");

            }else if (selectval == "53") {
                getInfo(time, 53);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("OSA");

            }else if (selectval == "54") {
                getInfo(time, 54);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Guidance Office");

            }else if (selectval == "55") {
                getInfo(time, 55);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Registrar Office");

            }else if (selectval == "56") {
                getInfo(time, 56);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Assessment/Casher");

            }else if (selectval == "57") {
                getInfo(time, 57);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Library");

            }
            else if (selectval == "58") {
                getInfo(time, 58);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("IC");

            }
            else if (selectval == "59") {
                getInfo(time, 59);
                $(".tvepBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("TVEP Room");

            }
            else if (selectval == "60") {
                getInfo(time, 60);
                $(".autoBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Automotive Building");

            }
            else if (selectval == "61") {
                getInfo(time, 61);
                $(".mechBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("Mechanical Building");

            }

    });


}
function getAdmin(){
     var time = $("#realTime").val();
    $("#selectAdmin").fadeIn();
    $("#selectRooms").hide();
    $("#selectFaculty").hide();
    $("#selectOther").hide();
    $('#adminID').on('change', function() {
        var selectval = this.value;
            if (selectval == "54") {
                 getInfo(time, 54);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(54)?>");
            }else  if (selectval == "55") {
                 getInfo(time, 55);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(55)?>");
            }else  if (selectval == "56") {
                 getInfo(time, 56);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(56)?>");
            }else  if (selectval == "57") {
                 getInfo(time, 57);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(57)?>");
            }else  if (selectval == "52") {
                 getInfo(time, 52);
                $(".stgb").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(52)?>");
            }else  if (selectval == "53") {
                 getInfo(time, 53);
                $(".draftingBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(53)?>");
            }else  if (selectval == "62") {
                 getInfo(time, 62);
                $(".mechBldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(62)?>");
            }else  if (selectval == "63") {
                 getInfo(time, 63);
                $(".tvepBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(63)?>");
            }else  if (selectval == "64") {
                 getInfo(time, 64);
                $(".academic_2_bldg").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(64)?>");
            }

    });
}
function getFaculty(){
    var time = $("#realTime").val();
    $("#selectRooms").hide();
    $("#selectAdmin").hide();
    $("#selectOther").hide();
    $("#selectFaculty").fadeIn();
    $('#facultyID').on('change', function() {
        var selectval = this.value;
            if (selectval == "65") {
                 getInfo(time, 65);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(65)?>");
            }else  if (selectval == "67") {
                 getInfo(time, 67);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(67)?>");
            }else  if (selectval == "58") {
                 getInfo(time, 58);
                $(".comLab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(58)?>");
            }else  if (selectval == "66") {
                 getInfo(time, 66);
                $(".3_storey_lab").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(66)?>");
            }

     });
}
function getOther(){
     var time = $("#realTime").val();
    $("#selectRooms").hide();
    $("#selectAdmin").hide();
    $("#selectFaculty").hide();
    $("#selectOther").fadeIn();
    $('#OtherID').on('change', function() {
        var selectval = this.value;
            if (selectval == "74") {
               //  getInfo(time, 74);
                $(".clinic").addClass("active");
                 setTimeout(function(){
                    $(".clinic").removeClass("active");
                },1000);
               // $("#modalInfo").modal();
                //$(".roomName").text("<?php echo getRoomName(74)?>");
            }else  if (selectval == "68") {
                 getInfo(time, 68);
                $(".adminBuilding").addClass("active");
                $("#modalInfo").modal();
                $(".roomName").text("<?php echo getRoomName(68)?>");
            }else  if (selectval == "69") {
                // getInfo(time, 69);
                $(".comLab").addClass("active");
                 setTimeout(function(){
                    $(".comLab").removeClass("active");
                },1000);
               // $("#modalInfo").modal();
               // $(".roomName").text("<?php echo getRoomName(69)?>");
            }else  if (selectval == "70") {
               //  getInfo(time, 70);
                $(".alumni").addClass("active");
                 setTimeout(function(){
                    $(".alumni").removeClass("active");
                },1000);
                //$("#modalInfo").modal();
                //$(".roomName").text("<?php echo getRoomName(70)?>");
            }else  if (selectval == "71") {
               //  getInfo(time, 71);
                $(".ptaHall").addClass("active");
                 setTimeout(function(){
                    $(".ptaHall").removeClass("active");
                },1000);
                //$("#modalInfo").modal();
                //$(".roomName").text("<?php echo getRoomName(71)?>");
            }else  if (selectval == "72") {
                 //getInfo(time, 72);
                $(".mechBldg").addClass("active");
                 setTimeout(function(){
                    $(".mechBldg").removeClass("active");
                },1000);
                //$("#modalInfo").modal();
               // $(".roomName").text("<?php echo getRoomName(72)?>");
            }else  if (selectval == "73") {
                // getInfo(time, 73);
                $(".autoBldg").addClass("active");
                 setTimeout(function(){
                    $(".autoBldg").removeClass("active");
                },1000);
               // $("#modalInfo").modal();
               // $(".roomName").text("<?php echo getRoomName(73)?>");
            }

     });
}
function getInfo(time, room){
    //var time = $("#realTime").val();
   // alert(room);
    data = "id="+room+"&time="+time;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../ajax/getInfo.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);

    xhr.onload = function() {
        if (xhr.status != 200) {
        } else {
           //alert(xhr.response);
            $("#roomContent").html(xhr.response);
        }
    };

}
function stgbBldg(){

    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 1);
    $(".stgb").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Stgb Building");

}
function three_storeyBldg(){

    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 2);
    $(".3_storey_lab").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Three Storey Laboratory Building");

}
function comLab(){

    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 3);
    $(".comLab").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Computer Laboratory Building");

}
function draftingBldg(){

    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 6);
    $(".draftingBldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Drafting Building");

}
function academic1Bldg(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 4);
    $(".academic_1_bldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Academic 1 Building");
}
function academic2Bldg(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 5);
    $(".academic_2_bldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Academic 2 Building");
}
function mm12Bldg(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 7);
    $(".mm12Bldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("MM1 & 2 Building");
}
function mm34Bldg(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 8);
    $(".mm34Bldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("MM3 & 4 Building");
}
function tvepBuilding(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 9);
    $(".tvepBuilding").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("TVEP Building");
}
function autoBldg(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 10);
    $(".autoBldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Automotive Building");
}
function mechBldg(){
    var time = $("#realTime").val();
   // alert(time);
    getBuildingInfo(time, 11);
    $(".mechBldg").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Mechanical Building");
}
function clinic(){
   // var time = $("#realTime").val();
   // alert(time);
    // getBuildingInfo(time, 11);
    $(".clinic").addClass("active");
     setTimeout(function(){
        $(".clinic").removeClass("active");
    },1000);
    //$("#modalBuildingInfo").modal();
    //$(".buildingName").text("Mechanical Building");
}
function ptaHall(){
   // var time = $("#realTime").val();
   // alert(time);
   // getBuildingInfo(time, 11);
    $(".ptaHall").addClass("active");
     setTimeout(function(){
        $(".ptaHall").removeClass("active");
    },1000);
    //$("#modalBuildingInfo").modal();
    //$(".buildingName").text("Mechanical Building");
}
function alumni(){
  //  var time = $("#realTime").val();
   // alert(time);
   // getBuildingInfo(time, 11);
    $(".alumni").addClass("active");
    setTimeout(function(){
        $(".alumni").removeClass("active");
    },1000);
   // $("#modalBuildingInfo").modal();
   // $(".buildingName").text("Alumni Building");
}
function adminBldg(){
    var time = $("#realTime").val();
   getBuildingInfo(time, 12);
    $(".adminBuilding").addClass("active");
    $("#modalBuildingInfo").modal();
    $(".buildingName").text("Admin Building");
}
function cr(){
  //  var time = $("#realTime").val();
   // alert(time);
   // getBuildingInfo(time, 11);
    $(".cr").addClass("active");
    setTimeout(function(){
        $(".cr").removeClass("active");
    },1000);
   // $("#modalBuildingInfo").modal();
   // $(
}
function mrf(){
  //  var time = $("#realTime").val();
   // alert(time);
   // getBuildingInfo(time, 11);
    $(".mrf").addClass("active");
    setTimeout(function(){
        $(".mrf").removeClass("active");
    },1000);
   // $("#modalBuildingInfo").modal();
   // $(
}
function getBuildingInfo(time, building){
    //var time = $("#realTime").val();
    data = "id="+building+"&time="+time;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../ajax/view_building_info.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);

    xhr.onload = function() {
        if (xhr.status != 200) {
        } else {

            $("#buildingContent").html(xhr.response);
        }
    };

}

$(document).ready(function(){
    $('#modalInfo').on('hidden.bs.modal', function () {
      $(".stgb").removeClass("active");
      $(".3_storey_lab").removeClass("active");
      $(".comLab").removeClass("active");
      $(".draftingBldg").removeClass("active");
      $(".academic_2_bldg").removeClass("active");
      $(".academic_1_bldg").removeClass("active");
      $(".mm34Bldg").removeClass("active");
      $(".mm12Bldg").removeClass("active");
      $(".tvepBuilding").removeClass("active");
      $(".autoBldg").removeClass("active");
      $(".mechBldg").removeClass("active");
      $(".adminBuilding").removeClass("active");
    });
    $('#modalBuildingInfo').on('hidden.bs.modal', function () {
      $(".stgb").removeClass("active");
      $(".3_storey_lab").removeClass("active");
      $(".comLab").removeClass("active");
      $(".draftingBldg").removeClass("active");
      $(".academic_1_bldg").removeClass("active");
      $(".academic_2_bldg").removeClass("active");
      $(".mm34Bldg").removeClass("active");
      $(".mm12Bldg").removeClass("active");
      $(".tvepBuilding").removeClass("active");
      $(".autoBldg").removeClass("active");
      $(".mechBldg").removeClass("active");
      $(".adminBuilding").removeClass("active");
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
});
</script>

