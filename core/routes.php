 <?php

	define ('path','../views/');
	//require path.'home.php';
	if($page ==  md5('home')){
		require path.'home.php';
	}else if($page == md5('manage-room')){
		require path.'manage_room_sched.php';
	}else if($page == md5('manage-visitor')){
		require path.'manage_visitor.php';
	}else if($page == md5('manage-message')){
		require path.'manage_message.php';
	}else if($page == md5('manage-user')){
		require path.'manage_user.php';
	}
	
	