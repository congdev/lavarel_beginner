<?php require  "header.php" ?>
	<h3> Not ready </h3>
	<form action="fileupload.php" method="post" enctype="multipart/form-data">
		Select image to upload
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" name="submit" value="Upload Image">
	</form>


<!--  PHP  -->

<?php 
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//check if image file is actual image or fake image. 

if (isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($check != false) {
		echo "File is an image - ". $check["mime"]. ".";
		$uploadOk = 1;
	}
	else {
		echo "File is not an image";
		$uploadOk = false;
	}
}

if (file_exists($target_file)) {
	echo "Sorry, file already exist";
	$uploadOk = 0;
}

//Check file size

if($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry , your file is too large";
	$uploadOk = 0;
}

//Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
	echo "Sorry, only JPG, JEG, PNG & GIF files are allowed";
	$uploadOk = 0;
}

if($uploadOk == 0) {
	echo "Sorry, your file was not uploaded";
}
else {
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded";
	}
	else {
		echo "Sorry , there was an error uploading your file. ";
	}
}

?>

<?php require "footer.php" ?>