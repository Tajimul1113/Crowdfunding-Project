<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['regType'];
    
    
    if($type == "Employee"){
      
      header('location: ../View/Employee/employeeRegistration.html');
     
    }
    if($type == "Donner"){
      
      header('location: ../View/Donner/donnerRegistration.html');
     
    }
    if($type == "Applicant"){
      
      header('location: ../View/Applicant/applicantRegistration.html');
     
    }
    

    
  }


?>