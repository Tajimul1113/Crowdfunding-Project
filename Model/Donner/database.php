<?php

	$dbname = "webtech_project";
	$dbpass = "";
    $dbuser = "root";
	$host	= "localhost";


	function getConnection(){
		global $dbname, $dbpass, $host, $dbuser;
	
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		  }
		  echo "Connected successfully";
	}

?>