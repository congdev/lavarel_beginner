<?php 
	if (isset($_GET['action'])) {
		switch ($_GET['action']) {
			case 'login':
				include('controller/user/login.php');
				break;
			case 'listuser':
				include('controller/user/listuser.php');
				break;
			case 'logout':
				include('controller/user/logout.php');
				break;
		}
	}
?>