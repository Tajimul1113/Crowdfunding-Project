<?php
require_once('../../Model/Admin/adminModel.php');
if($_POST['submit']){
  $notice = $_POST['post'];
  
  
  if ( $notice == "") {
    echo 'Write a notice then post... go back to <a href="../../View/Admin/postNotice.html">try again</a>';
  }
  else if(str_word_count($notice)<3){
    echo 'You need to post a correct sentence formate';
    echo '<br><a href="../../View/Admin/postNotice.html">try again</a>';
  }
  
 
  else{

    session_start();
    
    $adminPost=[
                      'notice'=>$notice, 
                      'username' => $_SESSION['userName'],
                      
    ];
    $save =insertNotice($adminPost);
    if($save){
      header('location: ../../View/Admin/notice.php');
    }
    else{
      echo "File didn't updated";
    }
    
  }
}

?>