<?php
require_once('../../Model/Applicant/applicantModel.php');

if($_POST['update']){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $occupation = $_POST ['occupation'];
  $gender = $_POST['gender'];
  $emailCheck = "@gmail.com";
  $dateOfBirth = $_POST['date']."/".$_POST['month']."/".$_POST['year'];
  if ( $name == "" || $email == "" || $_POST['date']==""   || $_POST['month'] == ""  ||  $_POST['year'] == "") {
    echo 'Filled all the file... go back to <a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
  else if(str_word_count($name)<2){
    echo 'You have to give your first name and last name. Ex: FirstName LastName';
    echo '<br><a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
  else if(strchr( $email,"@gmail.com")!="@gmail.com"){
    echo 'email formate should be: info@gmail.com <br><a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
  else if(str_word_count($occupation)<1){
    echo 'You have to give your occupation';
    echo '<br><a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
  else if((int)$_POST['date']>31 ){
    echo 'You have given a invalid date <a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
  else if((int)$_POST['month']>12 ){
    echo 'You have given a invalid month <a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
  else if((int)$_POST['year']>2002 ){
    echo 'You have given a invalid year <a href="../../View/Applicant/applicantUpdateProfile.html">try again</a>';
  }
 
  else{
    session_start();
    $user_name = $_SESSION['userName'];
    $user=[
                      'name'=>$name, 
                       
                      'email'=> $email,
                      'occupation'=> $occupation,
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
                      'username' => $user_name,
    ];

    $save =applicantUpdateProfile($user);
    if($save){
      header('location: ../../View/Applicant/applicantProfile.php');
    }
    else{
      echo "File didn't updated";
    }
    
  }
}

?>