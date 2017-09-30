<?php require  "header.php" ?>

<?php 
 	$fileName = "media/demo1.txt";
	$datalist = readData($fileName);	
//read file and return array
	function readData ($filename) {
		$datalist = array();
		$myfile = fopen($filename, r) or die("Unable to open file!");
		while (!feof($myfile)) {
			$arr = getArray(fgets($myfile));
			if (isset($arr)) {
				array_push($datalist, $arr);
			}
		}
		fclose($myfile);
		return $datalist;
	}

//passer text to array 

	function getArray($text) {
		if(empty($text))
			return NULL;
		$list = explode("=",$text);
		foreach ($list as $value) { 
			$value = trim($value);
		}
		return $list;
	}
?>

<table class="file_list">
	<?php 
		foreach ($datalist as $value) {
			echo "<tr>";
			echo "<td>".$value[0]."</td>";
			echo "<td>".$value[1]."</td>";
			echo "</tr>";
		}
	?>	
</table>

<?php require "footer.php" ?>