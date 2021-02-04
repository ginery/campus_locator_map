<?php require 'modals/room_information.php';?>
<?php require 'modals/view_building_info.php';?>
<?php require 'modals/legend.php';?>

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
#liLegend{
    float: left;
    margin-right: 20px;
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
            <!-- <button onclick="legend()" class="btn btn-grd-primary pull-right">Legend</button> -->
            <h2 style="padding: 8px; color: #848080;">Campus Locator Map</h2>
            <!-- <span id="date_time"></span> -->
            
            <input type="hidden" name="" id="realTime">
            <hr style="margin-top: 0; margin-bottom: 0;">
            <div class="label-main">
                <label class="label label-inverse-success"><b>Legend:</b></label>
            </div>
            <br>
            <ul id="ulLegend">
                <li id="liLegend"><i class="icofont icofont-foot-print text-primary"></i> - Footsteps</li>
                <li id="liLegend"><i class="icofont icofont-ui-remove" style="color: #58ff74"></i> - Shortest Way</li>
                <li id="liLegend"><i class="icofont icofont-ui-remove" style="color: #fd4600"></i> - Longest Way</li>
            </ul>
            <hr  style="clear: both;">
            

    
    <div class="col-md-12" style="background: #a2f1a8; overflow: auto; ">
    
        <div style="width: 1032px; height: inherit;  background: #a2f1a8;">
            <!-- map image -->
           <img src="../assets/images/chmsc_map.png" style="width: 1020px; float: left; z-index: -1">
           <!-- map lines -->
            <div class="line_map stgb" onclick="getBuildingInfo(2, 'Stgb Building')" style="position: absolute; float: left;border: 2px solid #ffea58; width: 175px; height: 66px; margin-left: 72px; margin-top: 18px;" data-toggle="tooltip" data-placement="bottom" title="Stgb Building"></div>

            <div class="line_map 3_storey_lab" onclick="getBuildingInfo(6, 'Three Storey Laboratory Building')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 199px; height: 46px; margin-left: 247px; margin-top: 29px;" data-toggle="tooltip" data-placement="bottom" title="Three Storey Laboratory Building"></div>

            <div class="line_map" style="position: absolute; float: left; border: 2px solid #ffea58; width: 133px; height: 46px; margin-left: 446px; margin-top: 29px;" data-toggle="tooltip" data-placement="bottom" title="Three Storey Laboratory Building(Proposed)"></div>

            <div class="line_map comLab" onclick="getBuildingInfo(7, 'Computer Building')" style="position: absolute; float: left; border: 2px solid #ffea58;width: 80px; height: 58px; margin-left: 579px; margin-top: 29px;" data-toggle="tooltip" data-placement="bottom" title="Computer Building"></div>

            <div class="line_map tvepBuilding" onclick="getBuildingInfo(14, 'TVEP Building')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 53px; height: 126px; margin-left: 462px; margin-top: 148px;" data-toggle="tooltip" data-placement="left" title="TVEP Building"></div>

            <div class="line_map cr" style="position: absolute; float: left; border: 2px solid #ffea58; width: 33px; height: 34px; margin-left: 430px; margin-top: 278px;" data-toggle="tooltip" data-placement="left" title="Comfort Room"></div>

            <div class="line_map autoBldg" onclick="getBuildingInfo(15, 'Automotive Building')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 42px; height: 124px; margin-left: 529px; margin-top: 155px;" data-toggle="tooltip" data-placement="bottom" title="Automotive Building"></div>

            <div class="line_map mechBldg" onclick="getBuildingInfo(16, 'Mechanical Building')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 42px; height: 124px; margin-left: 603px; margin-top: 155px;" data-toggle="tooltip" data-placement="bottom" title="Mechanical Building"></div>

            <div class="line_map draftingBldg" onclick="getBuildingInfo(8, 'Drafting Building')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 59px; height: 148px;   margin-left: 696px; margin-top: 155px;" data-toggle="tooltip" data-placement="right" title="Drafting Building"></div>

            <div class="line_map academic_2_bldg" onclick="getBuildingInfo(10, 'Academic 2')" style="position: absolute; float: left; border: 2px solid #ffea58;width: 54px; height: 154px; margin-left: 447px; margin-top: 322px;" data-toggle="tooltip" data-placement="top" title="Academic 2"></div>

            <div class="line_map academic_1_bldg" onclick="getBuildingInfo(9, 'Academic 1')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 54px; height: 154px; margin-left: 591px; margin-top: 322px;" data-toggle="tooltip" data-placement="top" title="Academic 1"></div>

            <div class="line_map adminBuilding" onclick="getBuildingInfo(12, 'Admin Building')" style="position: absolute;  float: left; border: 2px solid #ffea58;width: 258px; height: 41px; margin-left: 403px; margin-top: 476px;" data-toggle="tooltip" data-placement="bottom" title="Admin Building"></div>

            <div class="line_map mrf" style="position: absolute; float: left; border: 2px solid #ffea58; width: 101px;  height: 34px; margin-left: 34px; margin-top: 507px;" data-toggle="tooltip" data-placement="bottom" title="MRF"></div>

            <div class="line_map mm12Bldg" onclick="getBuildingInfo(11, 'MM1, 2, 3, & 4 Building')" style="position: absolute; float: left;border: 2px solid #ffea58; width: 35px; height: 47px;margin-left: 705px; margin-top: 329px;" data-toggle="tooltip" data-placement="right" title="MM1 & 2 Building"></div>

            <div class="line_map mm34Bldg" onclick="getBuildingInfo(11, 'MM1, 2, 3, & 4 Building')" style="position: absolute; float: left; border: 2px solid #ffea58;width: 35px; height: 47px; margin-left: 705px; margin-top: 381px;" data-toggle="tooltip" data-placement="right" title="MM3 & 4 Building"></div>

             <div class="line_map court" onclick="getBuildingInfo(13, 'Covered Court')" style="position: absolute; float: left; border: 2px solid #ffea58; width: 90px; height: 154px; margin-left: 501px; margin-top: 322px;" data-toggle="tooltip" data-placement="top" title="Covered Court"></div>

             <div class="line_map clinic" style="position: absolute; float: left; border: 2px solid #ffea58; width: 35px;  height: 24px; margin-left: 705px; margin-top: 304px;" data-toggle="tooltip" data-placement="left" title="Clinic"></div>

             <div class="line_map alumni" style="position: absolute; float: left; border: 2px solid #ffea58; width: 35px;height: 24px; margin-left: 743px; margin-top: 304px;" data-toggle="tooltip" data-placement="right" title="Alumni Building"></div>

             <div class="line_map farm" style="position: absolute;  float: left;  border: 2px solid #ffea58; width: 90px;  height: 111px;  margin-left: 754px;  margin-top: 338px;" data-toggle="tooltip" data-placement="right" title="Veggie Farm"></div>

             <div class="line_map boys_dorm" style="position: absolute;  float: left; border: 2px solid #ffea58; width: 90px;  height: 146px;  margin-left: 836px;  margin-top: 156px;" data-toggle="tooltip" data-placement="right" title="Boys Dormitory"></div>

             <div class="line_map service_center" style="position: absolute;  float: left; border: 2px solid #ffea58;  width: 32px;  height: 124px;  margin-left: 571px; margin-top: 155px;" data-toggle="tooltip" data-placement="bottom" title="Service Center"></div>
             
              <div class="line_map  ptaHall" style="    position: absolute; float: left; border: 2px solid #ffea58; width: 19px;  height: 18px; margin-left: 512px; margin-top: 254px;" data-toggle="tooltip" data-placement="bottom" title="PTA Hall"></div>

            <!-- road lines -->

             <div class="" id="gate1" style="position: absolute; float: left; width: 48px; height: 26px; margin-left: -5px; margin-top: 83px; background: white; padding-left: 1px; border: 2px solid #58ff74; transform: rotate(-90deg);" data-toggle="tooltip" data-placement="bottom" title="Gate 1">Gate 1</div>
             <div class="" id="gate2" style="position: absolute; float: left; width: 48px; height: 26px; margin-left: 650px; margin-top: 6px; background: white; padding-left: 1px; border: 2px solid #58ff74;" data-toggle="tooltip" data-placement="bottom" title="Gate 2">Gate 2</div>

              <div class="" id="road_line" style="position: absolute; float: left;  width: 655px; height: 20px; margin-left: 33px; margin-top: 88px;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>


              
              <div class="" id="road_line" style="position: absolute; float: left; width: 23px;height: 540px; margin-left: 663px; margin-top: 32px;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style="position: absolute;float: left;width: 14px; height: 49px;margin-left: 635px; margin-top: 106px; border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style=" position: absolute;float: left;width: 19px; height: 16px; margin-left: 663px; margin-top: 90px; border: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style="position: absolute; float: left; width: 14px; height: 43px; margin-left: 635px; margin-top: 279px; border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style=" position: absolute;float: left;width: 14px;height: 48px; margin-left: 485px;margin-top: 274px;  border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style="position: absolute;float: left;width: 140px; height: 15px;margin-left: 497px; margin-top: 285px;border-right: 2px solid #909090;border-left: 2px solid #909090;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
              
              <div class="" id="road_line" style="position: absolute; float: left; width: 14px; height: 15px;margin-left: 515px;margin-top: 272px;border-top: 0;border-bottom: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style="position: absolute;float: left;width: 21px; height: 15px; margin-left: 684px; margin-top: 303px; border-left: 0;border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style="position: absolute; float: left; width: 70px; height: 14px; margin-left: 778px; margin-top: 303px; border-left: 0;border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

              <div class="" id="road_line" style=" position: absolute; float: left;  width: 15px; height: 13px; margin-left: 834px;margin-top: 302px; border-left: 0; border-bottom: 0; border-top: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>
               
            <div class="" id="road_line" style="position: absolute;float: left; width: 26px; height: 67px; margin-left: 135px; margin-top: 483px; border-bottom-left-radius: 15px;  border-top-right-radius: 15px;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

            <div class="" id="road_line" style="position: absolute;float: left;width: 506px;height: 23px; margin-left: 159px; margin-top: 527px; border-right: 0;border-left: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

            <div class="" id="road_line" style="position: absolute; float: left; width: 106px; height: 24px;margin-left: 31px;  margin-top: 483px; border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

            <div class="" id="road_line" style="position: absolute; float: left; width: 24px;height: 14px; margin-left: 463px; margin-top: 292px; border-right: 0;" data-toggle="tooltip" data-placement="bottom" title="Road Guide"></div>

            <!-- line markings green -->
            <!-- STGB Building G1 -->
            <div id="stgb_g" style="display: none;">
                <div style="position: absolute; width: 112px; border-bottom: 4px solid #58ff74; margin-top: 97px; margin-left: 33px;"></div>
                <div  style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 32px;margin-left: 677px; height: 62px;"></div>
                <div  style="position: absolute;  width: 520px; border-bottom: 4px solid #fd4600; margin-top: 90px; margin-left: 157px; height: 4px;"></div>
            </div>

            <!-- Three Storey laboratory Building G1 -->
            <div id="tsl_g" style="display: none;">
                <div id="tsl_g" style="position: absolute; width: 308px; border-bottom: 4px solid #58ff74; margin-top: 97px; margin-left: 33px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 32px;margin-left: 677px; height: 62px;"></div>
                <div style="position: absolute;  width: 355px; border-bottom: 4px solid #fd4600; margin-top: 90px; margin-left: 326px; height: 4px;"></div>
            </div>

            <!-- Computer Building G1 -->
            <div id="com_g" style="display: none;">
                <div style="position: absolute; width: 610px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 62px;"></div>
                <div style="position: absolute;  width: 51px; border-bottom: 4px solid #58ff74; margin-top: 90px; margin-left: 630px; height: 4px;"></div>
            </div>

            <!-- drafting G1-->
            <div id="draft_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 134px;"></div>
                
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 199px;"></div>
            </div>

             <!-- Academic 1 G1-->
            <div id="academic1_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 196px;"></div>
                <div style="position: absolute; width: 35px; border-bottom: 4px solid #fd4600; margin-top: 290px; margin-left: 641px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 290px; margin-left: 640px; height: 31px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 33px;margin-left: 678px; height: 265px;"></div>
                <div style="position: absolute; width: 38px; border-bottom: 4px solid #58ff74; margin-top: 294px; margin-left: 640px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 294px; margin-left: 636px; height: 27px;"></div>
            </div>

            <!-- Academic 2 G1-->
            <div id="academic2_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 196px;"></div>
                <div style="position: absolute;  width: 183px; border-bottom: 4px solid #fd4600; margin-top: 290px; margin-left: 494px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 290px; margin-left: 490px; height: 31px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 31px;margin-left: 678px; height: 266px;"></div>
                <div style="position: absolute;  width: 194px; border-bottom: 4px solid #58ff74; margin-top: 294px; margin-left: 488px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 294px; margin-left: 485px; height: 27px;"></div>
            </div>

            <!-- TVEP Building G1-->
            <div id="tvep_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 196px;"></div>
                <div style="position: absolute;  width: 183px; border-bottom: 4px solid #fd4600; margin-top: 290px; margin-left: 494px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 274px; margin-left: 490px; height: 20px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 33px; margin-left: 678px; height: 264px;"></div>
                <div style="position: absolute;  width: 188px; border-bottom: 4px solid #58ff74; margin-top: 293px; margin-left: 490px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 274px; margin-left: 486px; height: 23px;"></div>
            </div>

            <!-- Mechanical G1-->
            <div id="mech_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 196px;"></div>
                <div style="position: absolute;  width: 56px; border-bottom: 4px solid #fd4600; margin-top: 290px; margin-left: 621px; height: 4px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 262px;"></div>
                <div style="position: absolute;  width: 59px; border-bottom: 4px solid #58ff74; margin-top: 294px; margin-left: 622px; height: 4px;"></div>
            </div>

            <!-- Automotive G1-->
            <div id="auto_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 196px;"></div>
                <div style="position: absolute;  width: 129px; border-bottom: 4px solid #fd4600; margin-top: 290px; margin-left: 548px; height: 4px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 262px;"></div>
                <div style="position: absolute;  width: 133px; border-bottom: 4px solid #58ff74; margin-top: 294px; margin-left: 548px; height: 4px;"></div>
            </div>

            <!-- Court G1-->
            <div id="court_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 196px;"></div>
                <div style="position: absolute;  width: 129px; border-bottom: 4px solid #fd4600; margin-top: 290px; margin-left: 548px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 290px; margin-left: 546px; height: 31px;"></div>

                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 262px;"></div>
                <div style="position: absolute;  width: 129px; border-bottom: 4px solid #58ff74; margin-top: 294px; margin-left: 552px; height: 4px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 294px; margin-left: 552px; height: 27px;"></div>
            </div>

            <!-- MM building G1-->
            <div id="mm_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 284px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 349px;"></div>
            </div>

            <!-- Admin building G1-->
            <div id="admin_g" style="display: none;">
                <div style="position: absolute; width: 640px; border-bottom: 4px solid #fd4600; margin-top: 97px; margin-left: 33px;"></div>           
                <div style="position: absolute; width: 4px; border-left: 4px solid #fd4600; margin-top: 97px;margin-left: 673px; height: 378px;"></div>
                <div style="position: absolute; width: 4px; border-left: 4px solid #58ff74; margin-top: 32px;margin-left: 677px; height: 443px;"></div>
            </div>











          





       
           

        </div>
       
    </div>
</div>
<script type="text/javascript" src="..\lib\assets\js\speechtotext.js"></script>
<script type="text/javascript">
function legend(){
   // alert('test');
   $("#legendModal").modal();
}
function searchF(val){
  // alert(val);
    if (val.length==0) {
    document.getElementById("searchF").innerHTML="";
    $("#livesearch").hide();
    $("#inpLivesearch").val("");
    $("#schedID").val("");
    $("#stgb_g").fadeOut();
    $("#tsl_g").fadeOut();
    $("#com_g").fadeOut();
    $("#draft_g").fadeOut();
    $("#academic1_g").fadeOut();
    $("#academic2_g").fadeOut();
    $("#tvep_g").fadeOut();
    $("#mech_g").fadeOut();
    $("#auto_g").fadeOut();
    $("#court_g").fadeOut();
    $("#mm_g").fadeOut();
    $("#admin_g").fadeOut();
    $(".stgb").css({"border":"2px solid #ffea58"});
    $(".3_storey_lab").css({"border":"2px solid #ffea58"});
    $(".comLab").css({"border":"2px solid #ffea58"});
    $(".tvepBuilding").css({"border":"2px solid #ffea58"});
    $(".autoBldg").css({"border":"2px solid #ffea58"});
    $(".mechBldg").css({"border":"2px solid #ffea58"});
    $(".draftingBldg").css({"border":"2px solid #ffea58"});
    $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
    $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
    $(".adminBuilding").css({"border":"2px solid #ffea58"});
    $(".court").css({"border":"2px solid #ffea58"});
    $(".mm12bldg").css({"border":"2px solid #ffea58"});
    $(".mm34bldg").css({"border":"2px solid #ffea58"});
    return;
    }
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          // document.getElementById("livesearch").innerHTML=this.responseText;
          // document.getElementById("livesearch").style.border="1px solid #A5ACB2";
       
            var o = JSON.parse(xmlhttp.response);           
            if (o.name != null ){
                $("#livesearch").show();
                $("#livesearch").html(o.name);
                $("#inpLivesearch").val(o.building_id);
               // $("#schedID").val(o.id);

            }else{
                $("#livesearch").show();
                $("#livesearch").html("No result found.");
                

            }
        }
      }
      xmlhttp.open("GET","../ajax/searchroom.php?id="+val,true);
      xmlhttp.send();
}
function liveseachResult(){
    var txt = $("#inpLivesearch").val();
    if(txt != 'No result found.'){
    
        if(txt == 2){
            $("#stgb_g").fadeIn();
            $(".stgb").css({"border":"4px solid red"});
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 6){
            $(".3_storey_lab").css({"border":"4px solid red"});
            $("#tsl_g").fadeIn();
            $("#stgb_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 7){
            $(".comLab").css({"border":"4px solid red"});
            $("#com_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 14){
            $(".tvepBuilding").css({"border":"4px solid red"});
            $("#tvep_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 15){
            $(".autoBldg").css({"border":"4px solid red"});
            $("#auto_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 16){
            $(".mechBldg").css({"border":"4px solid red"});
            $("#mech_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 8){
            $(".draftingBldg").css({"border":"4px solid red"});
            $("#draft_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 10){
            $(".academic_2_bldg").css({"border":"4px solid red"});
            $("#academic2_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 9){
            $(".academic_1_bldg").css({"border":"4px solid red"});
            $("#academic1_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 12){
            $(".adminBuilding").css({"border":"4px solid red"});
            $("#admin_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 13){
            $(".court").css({"border":"4px solid red"});
            $("#court_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(txt == 11){
            $(".mm12Bldg").css({"border":"4px solid red"});
            $(".mm34Bldg").css({"border":"4px solid red"});
            $("#mm_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
        }
   
    }
    
   
}
function getBuildingInfo(id, title){
        if(id == 2){
            $("#stgb_g").fadeIn();
            $(".stgb").css({"border":"4px solid red"});
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 6){
            $(".3_storey_lab").css({"border":"4px solid red"});
            $("#tsl_g").fadeIn();
            $("#stgb_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 7){
            $(".comLab").css({"border":"4px solid red"});
            $("#com_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 14){
            $(".tvepBuilding").css({"border":"4px solid red"});
            $("#tvep_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 15){
            $(".autoBldg").css({"border":"4px solid red"});
            $("#auto_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 16){
            $(".mechBldg").css({"border":"4px solid red"});
            $("#mech_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 8){
            $(".draftingBldg").css({"border":"4px solid red"});
            $("#draft_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 10){
            $(".academic_2_bldg").css({"border":"4px solid red"});
            $("#academic2_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 9){
            $(".academic_1_bldg").css({"border":"4px solid red"});
            $("#academic1_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 12){
            $(".adminBuilding").css({"border":"4px solid red"});
            $("#admin_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#mm_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 13){
            $(".court").css({"border":"4px solid red"});
            $("#court_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#mm_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
            $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        }else if(id == 11){
            $(".mm12Bldg").css({"border":"4px solid red"});
            $(".mm34Bldg").css({"border":"4px solid red"});
            $("#mm_g").fadeIn();
            $("#tsl_g").fadeOut();
            $("#com_g").fadeOut();
            $("#draft_g").fadeOut();
            $("#academic1_g").fadeOut();
            $("#academic2_g").fadeOut();
            $("#tvep_g").fadeOut();
            $("#mech_g").fadeOut();
            $("#auto_g").fadeOut();
            $("#court_g").fadeOut();
            $("#admin_g").fadeOut();
            $(".stgb").css({"border":"2px solid #ffea58"});
            $(".3_storey_lab").css({"border":"2px solid #ffea58"});
            $(".comLab").css({"border":"2px solid #ffea58"});
            $(".tvepBuilding").css({"border":"2px solid #ffea58"});
            $(".autoBldg").css({"border":"2px solid #ffea58"});
            $(".mechBldg").css({"border":"2px solid #ffea58"});
            $(".draftingBldg").css({"border":"2px solid #ffea58"});
            $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
            $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
            $(".adminBuilding").css({"border":"2px solid #ffea58"});
            $(".court").css({"border":"2px solid #ffea58"});
        }
   
   // alert(title);
     $(".buildingName").html(title);
    $.ajax({
        type: "POST",
        url: "../ajax/getBuildingInfo.php",
        data: {
            id: id
        },
        success: function(data){
            //alert(data);
           
            $("#modalBuildingInfo").modal();
            $("#building_id").val(id);
            $("#buildingContent").html(data);
        }
    });
}
function getRoom(){
        var id = $("#building_id").val();
        if(id == 2){
            var roomname = 'Stgb Rooms';
            $("#stgb_g").fadeIn();
        }else if(id == 5){
            var roomname = 'Three Storey Laboratory Rooms';
        }
        $(".roomName").html(roomname);
        $("#modalBuildingInfo").modal('hide');
        $("#modalInfo").modal('show');
        $.ajax({
        type: "POST",
        url: "../ajax/getInfo.php",
        data: {
            id: id
        },
        success: function(data){
            //alert(data);
           
              
            $("#roomContent").html(data);
        }
    });
}
$(document).ready(function(){
    $('#modalBuildingInfo').on('hidden.bs.modal', function (e) {
        $("#stgb_g").fadeOut();
        $("#tsl_g").fadeOut();
        $("#com_g").fadeOut();
        $("#draft_g").fadeOut();
        $("#academic1_g").fadeOut();
        $("#academic2_g").fadeOut();
        $("#tvep_g").fadeOut();
        $("#mech_g").fadeOut();
        $("#auto_g").fadeOut();
        $("#court_g").fadeOut();
        $("#mm_g").fadeOut();
        $("#admin_g").fadeOut();
        $(".stgb").css({"border":"2px solid #ffea58"});
        $(".3_storey_lab").css({"border":"2px solid #ffea58"});
        $(".comLab").css({"border":"2px solid #ffea58"});
        $(".tvepBuilding").css({"border":"2px solid #ffea58"});
        $(".autoBldg").css({"border":"2px solid #ffea58"});
        $(".mechBldg").css({"border":"2px solid #ffea58"});
        $(".draftingBldg").css({"border":"2px solid #ffea58"});
        $(".academic_2_bldg").css({"border":"2px solid #ffea58"});
        $(".academic_1_bldg").css({"border":"2px solid #ffea58"});
        $(".adminBuilding").css({"border":"2px solid #ffea58"});
        $(".court").css({"border":"2px solid #ffea58"});
        $(".mm34Bldg").css({"border":"2px solid #ffea58"});
        $(".mm34Bldg").css({"border":"2px solid #ffea58"});


    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
});
</script>

