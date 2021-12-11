<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Update Applicant List</title>
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
    <fieldset>
      <fieldset>
        <legend>Applicant List</legend>
      <table border="1" align="center" width="800">
        
          
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Date of Birth</th>
            </tr>
            <tr>
              <td align="center">Md. Jahid Hasn</td>
              <td align="center">hasanj572@gmail.com</td>
              <td align="center">jahid34</td>
              <td align="center">23/09/1998</td>
            </tr>
            <tr>
              <td align="center">Md. Rokib Hasn</td>
              <td align="center">hasanr572@gmail.com</td>
              <td align="center">rokib</td>
              <td align="center">23/09/1995</td>
            </tr>
            <tr>
              <td align="center">Md. Ali Hasn</td>
              <td align="center">ali@gmail.com</td>
              <td align="center">ali143</td>
              <td align="center">25/08/1997</td>
            </tr>
        
      </table>
    </fieldset>
    <fieldset>
      <legend>Add another Aplicant </legend>
      <form action="../../controller/Admin/updateApp.php" method="post">
        <table align="center">
          <tr>
              <td>User Name </td>
              <td>: <input type="text" name="userName" id=""></td>
          </tr>
          <tr>
            <td>Email </td>
            <td>: <input type="text" name="email" id=""></td>
          </tr>
        </table>
        <hr>
        <table align="center">
          <tr>
            <td>
              <input type="submit" name="submit" value="Submit">
            </td> 
          </tr>         
        </table>  	
      </form>
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