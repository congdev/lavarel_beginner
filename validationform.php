<?php require  "header.php" ?>
<?php 

$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST["name"];
	$email = $_POST["email"];
	$website = $_POST["website"];
	$comment = $_POST["comment"];
	$gender = $_POST["gender"];


	if(empty($name))
	{
		$nameErr = "name is required";
	}
	else {
		$name = check_input($name);
		$nameErr = check_text($name);
	}

	if(empty($email))
	{
		$emailErr = "email is required";
	}
	else {
		$email = check_input($email);
		$emailErr = check_email($email);
	}

	if(empty($website))
	{
		$websiteErr = "website is required";
	}
	else {
		$website = check_input($website);
		$websiteErr = check_url($website);
	}

	if(empty($gender))
	{
		$genderErr = "gender is required";
	}
	else {
		$gender = check_input($gender);
	}
}

function check_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//Chek email validate 
//Must contain a valid email address ( with @ and . )
function check_email($data) {
	if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
  		return "Invalid email format"; 
	}
	return "";
}

//Check url 
//If present , it must containt a valid url
function check_url($data) {
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$data)) {
  		return "Invalid URL"; 
	}
	return "";

}

//Only letters and white space allowed
function check_text($data) {
	if(!preg_match("/^[a-zA-Z ]*$/",$data)) {
		return "Only letters and white space allowed";
	}
	return "";
}	

?>


<h3> PHP FORM VALIDATION REQUIRE</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" value="<?php echo $name ?>">
	<span class="error">*<?php echo $nameErr?></span>
	<br><br>
	Email: <input type="text" name="email" value="<?php echo $email ?>">
	<span class="error">* <?php echo $emailErr?></span>
	<br><br>
	Website:<input type="text" name="website" value="<?php echo $website ?>" >
	<span class="error">* <?php echo $websiteErr?></span>
	<br><br>
	Comment: <textarea name="comment" rows ="5" cols="40"></textarea>
	<br><br>

	Gender: 
	<input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked" ?> value="female"> Female
	<input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked" ?>  value="male"> Male
	<span class="error">* <?php echo $genderErr?></span>
	<br><br>
	<input type="submit" name="">
</form>

<?php 
echo "<h2> Your input: </h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php require "footer.php" ?>



