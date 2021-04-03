<?php
class DB_Conn {
	function __construct() {
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "rakeshdb";

		$link = mysqli_connect($host,$user,$password,$database);
		$this->dbcon = $link;

		if(mysqli_connect_errno()) {
          echo "Failed to connect to MySQL : " . mysqli_connect_error();
		}
	}

	public function insert($name,$address,$salary){
		$result = mysqli_query($this->dbcon, "INSERT INTO tbemp (name,adress,salary) VALUES('$name','$address',$salary)");
		return $result;
	}

	public function fetch_record(){
		$result = mysqli_query($this->dbcon, "SELECT * FROM tbemp");
		return $result;
	}

	public function delete_record($empno){
		$result = mysqli_query($this->dbcon, "DELETE FROM tbemp WHERE empno = '$empno'");
		return $result;
	}

	public function edit_data($empno){
		$result = mysqli_query($this->dbcon, "SELECT * FROM tbemp WHERE empno = '$empno'");
		return $result;
	}

	public function update_data($empno,$name,$address,$salary){
		$result = mysqli_query($this->dbcon, "UPDATE tbemp SET name = '$name', adress = '$address' , salary = '$salary' WHERE empno = '$empno'");
		return $result;
	}
}
?>