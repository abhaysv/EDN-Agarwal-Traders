<?php
class DBController {
//	private $host = "localhost";
//	private $user = "root";
//	private $password = "";
//	private $database = "blog_samples";

	
	private $host = "136.0.111.24";
	private $user = "agrawalt_website";
	private $password = "wW2U#tXxYL}9";
	private $database = "agrawalt_website";
	private $conn;


	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>