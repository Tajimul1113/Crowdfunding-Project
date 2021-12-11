<?php
require_once('../../Model/Admin/adminModel.php');
if($_POST['donate']){
  $aname = $_POST['name'];
  $donationAmount= $_POST['amountDonate'];
  
  
  if ( $aname == "") {
    echo 'Enter a Name <a href="../../View/Admin/donateToApplicant.html">try again</a>';
  }
  
  
 
  else{

    session_start();
    $userName = $_SESSION['userName'];
    $user = getUserByUsername($userName);
    $email = $user[0]['email'];
    $name =   $user[0]['name'];
    
    $donate=[
                      'dname'=>$name, 
                      'demail' => $email,
                      'aname' => $aname,
                      'damount' => $donationAmount,
                      
    ];
    $save =giveDonation($donate);
    if($save){
      header('location: ../../View/Admin/transctionDetails.html');
    }
    else{
      echo "File didn't updated";
    }
    
  }
}

?>