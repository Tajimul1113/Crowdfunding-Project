<?php
	
	require_once('database.php');

	function donnerLogin($userName, $password){
		$conn = getConnection();
		$sql = "select * from donnerinfo where username='{$userName}' and password='{$password}'";
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
		$sql = "select * from donnerinfo where username='{$userName}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    $user = [];
    array_push($user, $row);
		return $user;
	}

	



	function updateProfile($user){
		$conn = getConnection();
		$sql = "update donnerinfo set name=('', '{$user['name']}','{$user['address']}', '{$user['email']}', '{$user['username']}',  '{$user['password']}','{$user['occupation']}', '{$user['gender']}', '{$user['dateOfBirth']}', '{$user['yearlyIncome']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updatePassword($user){
		$conn = getConnection();
		$sql = "update donnerinfo set password='{$user['password']}' where username='{$user['userName']}'";
		
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




 
  function getApplicantList(){
		$conn = getConnection();
		$sql = "select * from donationinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

  function getDonnerList(){
		$conn = getConnection();
		$sql = "select * from donationinfo";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
	function insertDonnerData($user){
        $conn = getConnection();
        $sql = "insert into donnerinfo values('', '{$user['name']}','{$user['address']}', '{$user['email']}', '{$user['username']}',  '{$user['password']}','{$user['occupation']}', '{$user['gender']}', '{$user['dateOfBirth']}', '{$user['yearlyIncome']}')";
        
        
        
        if(mysqli_query($conn, $sql)){
            return true;
          }else{
            return false;
          }
      }
function donnerDeleteAccount($user){
		$conn = getConnection();
		$sql = "delete from donnerinfo  where username='{$user['userName']}' and '{$user['password']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>