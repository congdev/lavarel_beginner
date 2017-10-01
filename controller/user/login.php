<?php 
	
	if (isset($_POST['submit'])) {
		$u = $_POST['user'];
		$p = $_POST['pass'];
		if($u && $p) {
			$user = new User();
			$user->setName($u);
			$user->setPass($p);

			if ($user->login() == 'ok') {
				if ($_SESSION['level'] >= 2) {
					header("location:index.php?controller=user&action=listuser");
				}
				else {
					$err = "Ban khong co du quyen truy cap";
				}
			}
			else {
				$err = "Username or password not exits!";
			}
		}
	}
	include('view/user/login.php');
?>