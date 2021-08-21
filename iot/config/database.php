<?php 

//koneksi ke database
class database
{

	//property untuk dijadikan objek
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "dbiot";
	var $connection;
	
	//method koneksi ke database
	function connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}

 ?>