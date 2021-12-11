<?php
if(isset($_POST['empSubmit'])){
  $msg = $_POST['sentEmp'];
  
  
  if ( $msg == "") {
    echo 'Filled all the file... go back to <a href="../../View/Admin/massege.php">try again</a>';
  }
 
  
  
  
  
 
  else{
    
    $adminMsg=[
                      'msg'=>$msg, 
                      
    ];
    $adminDataJson= json_encode( $adminMsg );
    $jsonFile= fopen( "../../Model/Admin/empMsg.json", "w" );
    fwrite($jsonFile , $adminDataJson);
    fclose($jsonFile);
    header('location: ../../View/Admin/dashboard.html');
  }
  
}
else if(isset($_POST['appSubmit'])){
  $msg = $_POST['sentApp'];
  
  
  if ( $msg == "") {
    echo 'Filled all the file... go back to <a href="../../View/Admin/massege.php">try again</a>';
  }
  
  
  
  
  
 
  else{
    
    $adminMsg=[
                      'msg'=>$msg, 
                      
    ];
    $adminDataJson= json_encode( $adminMsg );
    $jsonFile= fopen( "../../Model/Admin/appMsg.json", "w" );
    fwrite($jsonFile , $adminDataJson);
    fclose($jsonFile);
    header('location: ../../View/Admin/dashboard.html');
  }
}
else if(isset($_POST['donSubmit'])){
  $msg = $_POST['sentDon'];
  
  
  if ( $msg == "") {
    echo 'Filled all the file... go back to <a href="../../View/Admin/massege.php">try again</a>';
  }
  
  
  
  
  
 
  else{
    
    $adminMsg=[
                      'msg'=>$msg, 
                      
    ];
    $adminDataJson= json_encode( $adminMsg );
    $jsonFile= fopen( "../../Model/Admin/donMsg.json", "w" );
    fwrite($jsonFile , $adminDataJson);
    fclose($jsonFile);
    header('location: ../../View/Admin/dashboard.html');
  }
}
?>