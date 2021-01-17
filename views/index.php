<?php 

session_start();
include '../config/connection.php';
$query = mysql_query("UPDATE tbl_users SET status='Active' WHERE `id`='$_SESSION[user_id]'")or die (mysql_error()); 
//echo $_GET['page']; // para ni sa log in
$page = (isset($_GET['page']) && $_GET['page'] !='') ? $_GET['page'] : '';
// $view = (isset($_GET['view']) && $_GET['view'] !='') ? $_GET['view'] : '';
// $sub = (isset($_GET['sub']) && $_GET['sub'] !='') ? $_GET['sub'] : '';
 if($_SESSION['status'] != 'in'){
  header('location: ../index.php');
  $query = mysql_query("UPDATE tbl_users SET status='Inactive' WHERE `id`='$_SESSION[user_id]'")or die (mysql_error()); 

  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CAMPUS LOCATOR MAP</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <?php require "resources.php";?>

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- sidebar start -->
            <?php require 'sidebar/sidebar_chat.php';?>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <?php require 'sidebar/sidebar.php';?>
                        <!-- sidebar end -->
                        <!-- content start -->
                            <div class="pcoded-content">
                                <div class="pcoded-inner-content">
                                    <div class="main-body">
                                        <div class="page-wrapper">

                                            <div class="page-body">
                                                <?php require '../core/routes.php';?>
                                                <!-- content end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript">
$(document).ready(function(){
 window.onload = date_time('date_time');


});
function date_time(id){
    date = new Date;
    year = date.getFullYear();
    month = date.getMonth();
    months = new Array('Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'June', 'July', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');
    d = date.getDate();
    day = date.getDay();
    days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    h = date.getHours();
    x = "AM";
    if (h   > 11) { x = "PM"; }
    if (h   > 12) { h = h - 12; }
    if (h   == 0) { h = 12; }
    if (h   < 10) { h = "0" + h; }
    m = date.getMinutes();
    if(m<10){ m = "0"+m; }
    s = date.getSeconds();
    if(s<10) { s = "0"+s; }
    result = ''+days[day]+' '+months[month]+' '+d+', '+year+' '+h+':'+m+':'+s+' '+x;
    document.getElementById(id).innerHTML = result;
    $("#realTime").val(h+':'+m+':'+s+' '+x);
    //getInfo(h+':'+m+':'+s);
    setTimeout('date_time("'+id+'");','1000');
    return true;
}
</script>
</html>
