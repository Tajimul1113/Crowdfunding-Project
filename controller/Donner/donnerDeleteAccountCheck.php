<?php

require_once('../../Model/Donner/donnerModel.php');
	if(isset($_POST['delete']))
	{
		
	
    if(strlen($_POST['password'])>=8)
		{
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['password']); $i++) { 
			if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo ' Wrong password <a href="../../View/Donner/donnerDeleteAccount.html">Back</a>';
		}
    
		else{
      
	    session_start();
			

      if ( $_SESSION['password'] == $_POST['password'] ) {
				
        $password=[
           
          'username'=>$_SESSION['userName'], 
          
          'password'=>$_POST['password'], 
          
          
            ];
           
						$save =donnerDeleteAccount($password);
						if($save){
							$_SESSION['password']=$_POST['currentPass'];
							header('location: ../logout.php');
						}
						else{
							echo "Delete operation Failed";
						}				
				
				
			}
      else{
        echo "Incorrect current password".'<a href="../../View/Donner/donnerDeleteAccount.html"> try again</a>';
      }
      
		}
		}
	} 
?>