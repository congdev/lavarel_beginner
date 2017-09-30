<?php require  "header.php" ?>
<?php 
//error handle function 
function customError($errorNumber, $errorStr) {
	echo "<b>Error : </b> [$errorNumber] $errorStr";
	echo "<br>Webmaster has been notified";
	error_log("Error : [$errorNumber] $errorStr",1,"congvh2012@gmail.com","From: webmaster@example.com");
}

//set error handler 
set_error_handler("customError",E_USER_WARNING);

//trigger error;
$test = 2;
if($test >=1) {
	trigger_error("Value must be 1 or below",E_USER_WARNING);
}
?>
<?php require "footer.php" ?>