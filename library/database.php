<?php 
	/**
	* Database
	*/
	class Database
	{
		protected $host = "localhost";
		protected $name = "root";
		protected $pass = "admin";
		protected $db 	= "usermanager";

		protected $conn;
		protected $result;

		//Connect database
		public function connect() {
			$this->conn = mysqli_connect($this->host,$this->name,$this->pass,$this->db);
		}
		//Disconnection 
		public function disconnect() {
			if ($this->conn) {
				mysql_close($this->conn);
			}
		}

		//Query a sql 
		public function query($sql) {
			if($this->conn) {
				$this->freeQuery();
				$this->result = mysqli_query($this->conn,$sql);
			}

			echo $this->conn->error;
		}
		//Remove query
		public function freeQuery() {
			if ($this->result) {
				mysqli_free_result($this->result);
			}
		}

		public function numRow() {
			if ($this->result) {
				$row = mysqli_num_rows($this->result);
				return $row;
			}
		}

		public function fetch() {
			if($this->conn) {
				$row = mysqli_fetch_array($this->result);
				return $row;
			}
		}
	}
?>