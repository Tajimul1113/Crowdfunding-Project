
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Donation Details</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
  <script type="text/javascript" src="../JS/applicant/ddetailsdata.js"></script>



<!-- CSS properties -->
<style>

.ddetailsdatabtn{
  background-color: rgb(255, 255, 255);
  border-radius: 13%;
  height: 48px;
  width: 190px;
}



</style>
</head>
<body>
    <!-- .................................Header Start..................... --> 
 
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./applicantdashBoard.html">Dashboard</a>&nbsp;
            <a href="./applicantProfile.php">Profile</a>&nbsp;
            <a href="./notification.html">Notification</a>&nbsp;
            <a href="../../controller/logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
      <fieldset>
        <legend><b><h3>Applicant Donation Details</h3></b></legend><br>
        <br>
        <div align="center">
        <input type="button" value="See Donation Details" class="ddetailsdatabtn" id="ddetailsdatabtn" name="ddetailsdata" onclick="ajax();">
        </div>
        
        <br>
        <br>
        <div class="result" id="result" align="center"></div>
        <br><br>
      
    </fieldset>
    
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>