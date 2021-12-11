<?php
if($_POST['submit']){
  $aaccno = $_POST['aaccno'];
  $amount = $_POST['amount'];
  $daccno1 = $_POST['daccno1'];
 
 
  if ( $aaccno == "" || $amount == "" ||$daccno1=="") {
    echo 'Fill up All the section... go back to <a href="../../View/Donner/donnerDonateMoney.html">Reload </a>';
  }
 
 
  else{

    echo ' <a href="../../View/Donner/donnerDonateMoney.html">Reload </a>';
      
  }
}

?>