<?php 
	if (isset($_SESSION["level"]) && $_SESSION['level'] >=2) {
		session_destroy();
		header("location:index.php");
	}
	else {
		echo "<h1> Error 404 not found!!</h1>";
	}
?>