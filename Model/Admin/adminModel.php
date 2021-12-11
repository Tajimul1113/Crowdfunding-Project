<?php
	
	require_once('db.php');

	function adminLogin($userName, $password){
		$conn = getConnection();
		$sql = "select * from admininfo where username='{$userName}' and password='{$password}'";
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
		$sql = "select * from admininfo where username='{$userName}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    $user = [];
    array_push($user, $row);
		return $user;
	}



	function updateUser($user){
		$conn = getConnection();
		$sql = "update admininfo set name='{$user['name']}', email='{$user['email']}', gender='{$user['gender']}', dateOfBirth='{$user['dateOfBarth']}' where username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function updatePassword($user){
		$conn = getConnection();
		$sql = "update admininfo set password='{$user['password']}' where username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertNotice($user){
		$conn = getConnection();
		$sql = "insert into notice values('', '{$user['username']}', '{$user['notice']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function getAllAdminNotice(){
		$conn = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}



  function getEmployeeifo(){
		$conn = getConnection();
		$sql = "select * from employeeinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
	function delEmpinfo($id){
		$conn = getConnection();
		$sql = "delete from employeeinfo  where Userid='{$id}'";
		

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
  function getAppinfo(){
		$conn = getConnection();
		$sql = "select * from applicantinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
	function delAppinfo($id){
		$conn = getConnection();
		$sql = "delete from applicantinfo  where id='{$id}'";
		

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
  function getDoninfo(){
		$conn = getConnection();
		$sql = "select * from donnerinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
	function delDoninfo($id){
		$conn = getConnection();
		$sql = "delete from donnerinfo  where id='{$id}'";
		

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	

	function giveDonation($user){
		$conn = getConnection();
		$sql = "insert into donationinfo values('', '{$user['dname']}', '{$user['demail']}', '{$user['aname']}', '{$user['damount']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function donationDetails(){
		$conn = getConnection();
		$sql = "select * from donationinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}


	



?>