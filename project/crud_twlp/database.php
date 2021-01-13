<?php
	class Database{
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_DATABASE;

		public $link;
		public $error;

		public function __construct(){
			$this->connectDB();
		}
		private function connectDB(){
			$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->link){
				$this->error = "Connection Failed" . $this->link->connect_error;
				return false;
			}
		}
		//data read
		public function select_data($query){
			$result = $this->link->query($query) or die($this->link->error.__LINE__);
			if($result->num_rows > 0){
				return $result;
			}
			else{
				return false;
			}
		}
	}
?>