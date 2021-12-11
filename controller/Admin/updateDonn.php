<?php
if($_POST['submit']){
  $name = $_POST['userName'];
  $email = $_POST['email'];
  
 
  if ( $name == "" || $email == "") {
    echo 'Filled all the file... go back to <a href="../../View/Admin/updateDonnerList.html">try again</a>';
  }
  
  else if(strchr( $email,"@gmail.com")!="@gmail.com"){
    echo 'email formate should be: info@gmail.com <br><a href="../../View/Admin/updateDonnerList.html">try again</a>';
  }
  else{
    header('location: ../../View/Admin/dashBoard.html');
  }
}

?>