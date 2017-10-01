<?php 
//cache in php 
//http://www.vietnoiviet.com/content/cac-ham-obstart-obgetcontents-obclean-obendflush-la-gi-dung-de-lam-gi
ob_start();
//session start
session_start();
include('library/database.php');
include('library/autoload.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>user manager</title>
	<link rel="stylesheet" type="text/css" href="#">
</head>
<body>
	<?php 
		//Show user 
		if (isset($_SESSION['name']) && $_SESSION['level'] >=2) {
			echo "<p style='text-align:center'>Chao mung <span style='color:red'>".$_SESSION['name']."</b></p>";
			echo "<p style='text-align:center'><a href='index.php?controller=user&action=logout'>Logout</a></p>";
		}
		if (isset($_GET['controller'])) {
			switch ($_GET['controller']) {
				case 'user':
					include('controller/user/controller.php');
					break;
			}
		}
		else {
			header("location:index.php?controller=user&action=login");
		}

	?>

</body>
</html>