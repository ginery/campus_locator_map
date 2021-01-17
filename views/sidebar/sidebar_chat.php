 <style type="text/css">
 #adUserNav:hover{
 	color: #64b0f2 !important;
 }
 </style>
 <nav class="navbar header-navbar pcoded-header test" header-theme="theme6">
	<div class="navbar-wrapper">

	    <div class="navbar-logo">
	        <a class="mobile-menu" id="mobile-collapse" href="#!">
	            <i class="feather icon-menu"></i>
	        </a>
	        <a href="#">
	            <img class="img-fluid" src="..\assets\images\logo2.png" alt="Theme-Logo" style=" width: 55%; margin-right: 96px;">
	        </a>
	        <a class="mobile-options">
	            <i class="feather icon-more-horizontal"></i>
	        </a>
	    </div>


	    <div class="navbar-container container-fluid">
	        <ul class="nav-left">
	        	<!-- for voice command search -->
	            <li class="header-search">
	                <div class="main-search morphsearch-search">
	                    <div class="input-group">
	                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
	                        <input type="text" class="form-control">
	                        <!-- <span class="input-group-addon search-btn"><i class="fa fa-microphone"></i></i></span> -->
	                    </div>
	                </div>
	            </li>

	            <li>
	                <a href="#!" onclick="javascript:toggleFullScreen()">
	                    <i class="feather icon-maximize full-screen"></i>
	                </a>
	            </li>
	        </ul>
	        <ul class="nav-right">
	
	            <?php if(getRole($_SESSION['role']) =="Developer" || getRole($_SESSION['role']) =="Owner" || getRole($_SESSION['role']) =="Administrator"){?>
	           <!--  <li class="header-notification">
	                <div class="dropdown-primary dropdown">
	                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
	                        <i class="feather icon-command"></i>
	                    </div>
	                </div>
	            </li> -->
	        <?php } ?>
	            <li class="user-profile header-notification">
	                <div class="dropdown-primary dropdown">
	                    <div class="dropdown-toggle" data-toggle="dropdown">
	                        <img src="..\lib\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
	                        <span><?php echo getUserName($_SESSION['user_id'])?> (<strong><?= getRole($_SESSION['role']);?></strong>)</span>
	                        <i class="feather icon-chevron-down"></i>
	                    </div>
	                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
	                        <li>
	                            <a href="logout.php">
	                                <i class="feather icon-log-out"></i> Logout
	                            </a>
	                        </li>
	                    </ul>

	                </div>
	            </li>
	        </ul>
	    </div>
	</div>
</nav>

<!-- Sidebar chat start -->
<!-- <div id="sidebar" class="users p-chat-user showChat">
	<div class="had-container">
	    <div class="card card_main p-fixed users-main">
	        <div class="user-box">

	            <div class="main-friend-list">
	            	<div class="media userlist-box">
	                    <div class="media-body">
	                        <div class="f-13 chat-header">ADMINTRATOR NAVIGATION</div>
	                    </div>
	                </div>
	                <div class="media userlist-box" id="adUserNav" data-toggle="tooltip" data-placement="left" title="Manage Accounts">
	                    <div class="media-left" >
	                     <div style="font-size: 28px;">
	                        <i id="icon" class="zmdi zmdi-assignment-account"></i>
	                    </div>
	                    </div>
	                    <div class="media-body">
	                    	<a href="index.php?page=<?php echo url_page('manage-account');?>">
	                        	<div class="f-13 chat-header" id="adUserNav">Manage Accounts</div>
	                   		</a>
	                    </div>

	                </div>
	                <div class="media userlist-box" id="adUserNav" data-toggle="tooltip" data-placement="left" title="Manage Role">
	                    <div class="media-left" >
	                     <div style="font-size: 28px;">
	                        <i id="icon" class="zmdi zmdi-assignment"></i>
	                    </div>
	                    </div>
	                    <div class="media-body">
	                    	<a href="index.php?page=<?php echo url_page('manage-role');?>">
	                        	<div class="f-13 chat-header" id="adUserNav">Manage Role</div>
	                   		</a>
	                    </div>
	                    
	                </div>
	                <div class="media userlist-box" id="adUserNav" data-toggle="tooltip" data-placement="left" title="Manage Branch">
	                    <div class="media-left" >
	                     <div style="font-size: 28px;">
	                        <i id="icon" class="zmdi zmdi-balance	T"></i>
	                    </div>
	                    </div>
	                    <div class="media-body">
	                    	<a href="index.php?page=<?php echo url_page('manage-branch');?>">
	                        	<div class="f-13 chat-header" id="adUserNav">Manage Branch</div>
	                   		</a>
	                    </div>	                    
	                </div>
	                <div class="media userlist-box" id="adUserNav" data-toggle="tooltip" data-placement="left" title="Manage Position">
	                    <div class="media-left" >
	                     <div style="font-size: 28px;">
	                        <i id="icon" class="zmdi zmdi-seat"></i>
	                    </div>
	                    </div>
	                    <div class="media-body">
	                    	<a href="index.php?page=<?php echo url_page('manage-position');?>">
	                        	<div class="f-13 chat-header" id="adUserNav">Manage Position</div>
	                   		</a>
	                    </div>
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
 -->