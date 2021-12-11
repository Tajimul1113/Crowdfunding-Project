<?php
if($_POST['EnterEmail']){
  
  $email = $_POST['email'];
 
  $emailCheck = "@gmail.com";
  
  
  if(strchr( $email,"@gmail.com")!="@gmail.com"){
    echo 'email formate : x@gmail.com <br><a href="../../View/Employee/employeeForgotPassword.html">try again</a>';
  }
  
  
  
 
  else{
   
    
    header('location: ../../View/index.html');
  }
}

?>