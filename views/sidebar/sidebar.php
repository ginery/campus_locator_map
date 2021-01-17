<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" ">
                <a href="index.php?page=<?php echo url_page('home')?>">
                    <span class="pcoded-micon"><i class="fa fa-map-marker"></i></span>
                    <span class="pcoded-mtext">Map</span>
                </a>
            </li>
            
            <?php if($page == md5('home')){

                $css = "display: block;";

            }else{
                $css = "display: none";
            }?>
            <li class="pcoded-hasmenu " style="<?php echo $css?>">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-bank"></i></span>
                    <span class="pcoded-mtext">Rooms</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="#" onclick="getAdmin()">
                            <span class="pcoded-mtext">Admin Office</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" onclick="getRoom()">
                            <span class="pcoded-mtext">Rooms</span>
                        </a>
                    </li>
                    <!-- <li class="">
                        <a href="#" onclick="getFaculty()">
                            <span class="pcoded-mtext">Faculty Office</span>
                        </a>
                    </li> -->
                     <!-- <li class="">
                        <a href="#" onclick="getOther()">
                            <span class="pcoded-mtext">Others</span>
                        </a>
                    </li> -->

                </ul>
            </li>
             <?php if(getRole($_SESSION['role']) =="Developer"){ ?>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-bank"></i></span>
                    <span class="pcoded-mtext">Manage</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="index.php?page=<?php echo url_page('manage-room')?>">
                            <span class="pcoded-mtext">Rooms</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="index.php?page=<?php echo url_page('manage-user')?>" onclick="">
                            <span class="pcoded-mtext">Users</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class=" ">
                <a href="index.php?page=<?php echo url_page('manage-visitor')?>">
                    <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                    <span class="pcoded-mtext">Visitor</span>
                </a>
            </li>
        <?php } ?>
            <li class=" ">
                <a href="index.php?page=<?php echo url_page('manage-message')?>">
                    <span class="pcoded-micon"><i class="fa fa-envelope"></i></span>
                    <span class="pcoded-mtext">Messages</span>
                </a>
            </li>
            </ul>
 </div>
</nav>
