<?php 
	/**
	* 
	*/
	class User extends Database
	{
		protected $userName;
		protected $userPass;
		protected $userLevel;
		protected $userId;

		public function __construct() {
			$this->connect();
		}

		public function setName($name) {
			$this->userName = $name;
		}
		public function getName() {
			return $this->userName;
		}
		public function setPass($pass) {
			$this->userPass = $pass;
		}
		public function getPass() {
			return $this->userPass;
		}
		public function setLevel($level) {
			$this->userLevel = $level;
		}
		public function getLevel() {
			return $this->userLevel;
		}
		public function setUserId($uid) {
			$this->userId = $uid;
		}
		public function getUserId() {
			return $this->userId;
		}

		public function login() {
			$sql = "SELECT * FROM users WHERE user_name = '$this->userName' AND user_pass = '$this->userPass'";
			$this->query($sql);
			if($this->numRow() >=1) {
				$row = $this->fetch();
				$_SESSION['name'] = $this->userName;
				$_SESSION['level'] = $row['user_level'];
				return 'ok';
			}
		}

		public function listUser() {
			$sql = "SELECT * FROM users";
			$this->query($sql);
			$result = array();
			$i = 0;

			while($row = $this->fetch()) {
				$result[$i] = array("user_id" => $row['user_id'],"user_name" => $row['user_name'],"user_level" => $row['user_level'], "user_pass" => $row['user_pass']);
				$i++;
			}
			return $result;
		}
	}

?>