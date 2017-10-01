<?php 
	
	//In PHP __autoload() is a magic method, means it calls automatically when you try 
	//create an object of the class and if the PHP engine doesn't find the class in the script it'll try to call __autoload() magic method.
	//__autoload da bi thay the. tham khao http://php.net/spl_autoload_register
	function my_autoloader($class) {
		$class = strtolower($class);
	    include 'model/user/' . $class . '.php';
	}
	spl_autoload_register("my_autoloader");
?>