<?php

require_once('../../Model/Applicant/applicantModel.php');
	if(isset($_POST['submit']))
	{
		
	
    if(strlen($_POST['currentPass'])>=8)
		{
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['currentPass']); $i++) { 
			if($_POST['currentPass'][$i] === '@' || $_POST['currentPass'][$i] === '#' || $_POST['currentPass'][$i] === '$' || $_POST['currentPass'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo 'Password must contain at least one of the special characters (@, #, $, %) <a href="../../View/Applicant/applicantDeleteAccount.html">Back</a>';
		}
    
		else{
      
	    session_start();
			

      if ( $_SESSION['password'] == $_POST['currentPass'] ) {
				
        $password=[
           
          'userName'=>$_SESSION['userName'], 
          
          'password'=>$_POST['currentPass'], 
          
          
            ];
           
						$save =applicantDeleteAccount($password);
						if($save){
							$_SESSION['password']=$_POST['currentPass'];
							header('location: ../logout.php');
						}
						else{
							echo "File didn't updated";
						}				
				
				
			}
      else{
        echo "Incorrect current password".'<a href="../../View/Applicant/applicantDeleteAccount.html"> try again</a>';
      }
      
		}
		}
	} 
?>