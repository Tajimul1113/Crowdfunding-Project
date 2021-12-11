<?php
	
	require_once('db.php');

	function employeeLogin($userName, $password){
		$conn = getConnection();
		$sql = "select * from employeeinfo where username='{$userName}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    
    
		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}


  function getUserByUsername($userName){
		$conn = getConnection();
		$sql = "select * from employeeinfo where username='{$userName}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    $user = [];
    array_push($user, $row);
		return $user;
	}



	function employeeUpdateProfile($user){
		$conn = getConnection();
		$sql = "update employeeinfo set name='{$user['name']}', email='{$user['email']}', gender='{$user['gender']}', dateOfBarth='{$user['dateOfBarth']}' where username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function employeeChangePassword($user){
		$conn = getConnection();
		$sql = "update employeeinfo set password='{$user['password']}' where username='{$user['userName']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	



	


  
  function getApplicantinfo(){
		$conn = getConnection();
		$sql = "select * from applicantinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
  function getDonorinfo(){
		$conn = getConnection();
		$sql = "select * from doninfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function insertEmployeeData($user){
		$conn = getConnection();
		$sql = "insert into employeeinfo values('', '{$user['name']}', '{$user['email']}', '{$user['phone']}', '{$user['address']}','{$user['userName']}', '{$user['password']}', '{$user['gender']}' , '{$user['dateOfBarth']}')";
		
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		  }else{
			return false;
		  }
	  }


?>