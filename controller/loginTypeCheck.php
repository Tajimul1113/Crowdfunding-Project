<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['loginType'];
    
    if($type == "Admin"){
      
      header('location: ../View/Admin/adminLogin.html');
     
    }
    if($type == "Employee"){
      
      header('location: ../View/Employee/employeeLogin.html');
     
    }
    if($type == "Donner"){
      
      header('location: ../View/Donner/donnerLogin.html');
     
    }
    if($type == "Applicant"){
      
      header('location: ../View/Applicant/applicantLogin.html');
     
    }
    

    
  }


?>