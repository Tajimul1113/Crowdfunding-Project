<?php

$jsonFile1= fopen("../../Model/employeeMsg.json","r");
$jsonRead1= fread($jsonFile1,filesize("../../Model/employeeMsg.json"));
$employeeMsg = json_decode($jsonRead1, true);
$emMsg ="<td>"."<h4>Employee Message:</h4>"."</td>"."<td>".$employeeMsg ['msg']."</td>";


$jsonFile2= fopen("../../Model/applicantMsg.json","r");
$jsonRead2= fread($jsonFile2,filesize("../../Model/applicantMsg.json"));
$applicantMsg = json_decode($jsonRead2, true);
$appMsg ="<td>"."<h4>Applicant Message:</h4>"."</td>"."<td>". $applicantMsg ['msg']."</td>";

$jsonFile3= fopen("../../Model/donnerMsg.json","r");
$jsonRead3= fread($jsonFile3,filesize("../../Model/donnerMsg.json"));
$donnerMsg = json_decode($jsonRead3, true);
$donMsg = "<td>"."<h4>Donner Message:</h4>"."</td>"."<td>".$donnerMsg ['msg']."</td>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
            <a href="./dashBoard.html">Dashboard</a>&nbsp;
            <a href="./adminProfile.php">Profile</a>&nbsp;
            <a href="./notification.html">Notification</a>&nbsp;
            <a href="../../controller/logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <form action="../../controller/Admin/adminReply.php" method="post">
    <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Messages</h3>
            <hr>
            
          </td>
        </tr>
        <tr>
          
            <?php echo $emMsg ?>

          
        </tr>
        <tr>
        <td>
        <input type="text" name="sentEmp" id=""><input type="submit"  value="Reply" name="empSubmit">
        </td>
        </tr>
        
        <tr>
          
            <?php echo $appMsg ?>
          
        </tr>
        <tr>
          <td>
            <input type="text" name="sentApp" id=""><input type="submit" value="Reply" name="appSubmit">
          </td>
        </tr>
        
        <tr>
          
            <?php echo $donMsg ?>
          
        </tr>

        <tr>
          <td>
            <input type="text" name="sentDon" id=""><input type="submit" value="Reply" name="donSubmit">
          </td>
        </tr>
        
      </table>
    </fieldset>
    </form>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>

<?php
   fclose($jsonFile1);
   fclose($jsonFile2);
   fclose($jsonFile3);
?>