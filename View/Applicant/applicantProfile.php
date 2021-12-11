<?php
    
    require_once('../../Model/Applicant/applicantModel.php');
    session_start();
    $userName = $_SESSION['userName'];
    $user = applicantProfileShow($userName);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Profile</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./applicantDashBoard.html">Dashboard</a>&nbsp;
            <a href="./applicantProfile.php">Profile</a>&nbsp;
            <a href="./notification.html">Notification</a>&nbsp;
            <a href="../../controller/logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="800">
        <tr>

          <td>
            <fieldset>
              <legend><b>Applicant Profile</b></legend>
              <img src="../../assets/user.png" alt="" width="100" height="100"><br>
              <a href="./applicantChangePic.html">Change</a>
              <table>
                <tr>
                  <td>Name &nbsp;&nbsp;</td>
                  <td>: &nbsp; <?php echo $user[0]['name'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Email &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo $user[0]['email'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Occupation &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo $user[0]['occupation'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Gender &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo $user[0]['gender'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                  <td>Date of Birth &nbsp;&nbsp;</td>
                  <td>:  &nbsp;<?php echo $user[0]['dateOfBarth'];?></td>
                </tr>
              </table>
              <hr>
              <a href="./applicantUpdateProfile.html">Edit Profile</a><br><br>
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>


