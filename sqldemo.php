<?php require  "header.php" ?>
<?php 

function errorCustom ($errorNo,$errorLog) {
	echo "<b>Error </b>: [$errorNo] $errorLog </br>";
}

set_error_handler("errorCustom");

$servername = "localhost";
$username   = "root";
$password	= "admin";
$dbname   	= "demosql";

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";


//Create connection.
$conn = new mysqli($servername,$username,$password,$dbname);

//Check connection 
if ($conn->connect_error) {
	trigger_error("Connection failed". $conn->connect_error);
	die("Finished");
}

if ($conn->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
}
else {
	echo "Error creating table : ".$conn->error;
}
$conn->close();
?>
<?php require "footer.php" ?>