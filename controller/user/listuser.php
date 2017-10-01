<?php 
	if (isset($_SESSION['level']) && $_SESSION['level'] >=2) {
		$user = new User();
		$result = $user->listUser();
		include('view/user/listuser.php');
	}
	else {
		header("location:index.php");
	}	
?>