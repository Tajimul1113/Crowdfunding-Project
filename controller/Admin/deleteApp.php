<?php
  require_once('../../Model/Admin/adminModel.php');
  if(isset($_POST['submit']))
	{
    $id = $_POST["id"];
		
		if(strlen($id)<1){
      echo "ID is empty";
    }

		else{
      
			$flag = delAppinfo($id);

      if($flag){
        echo "Applicant deleted";
        header('location: ../../View/Admin/delApp.html');
      }
      else{
        echo "ID is invalid";
        header('location: ../../View/Admin/delApp.html');
      }
			
			

      
      
      
		}
   }
   
?>