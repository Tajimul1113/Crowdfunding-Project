<?php
if($_POST['submit']){
  $daccno = $_POST['daccno'];
  $otp = $_POST['otp'];
  $amount = $_POST['amount'];
 
 
  if ( $daccno == "" || $otp == "" ||$amount=="") {
    echo 'Fill up All the section... go back to <a href="../../View/Donner/rechargeMoneyFromBankAccount.html">Reload </a>';
  }
 
 
  else{

    echo ' <a href="../../View/Donner/rechargeMoneyFromBankAccount.html">Reload </a>';
      
  }
}

?>