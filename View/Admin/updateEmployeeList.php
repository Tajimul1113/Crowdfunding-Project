<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Update Employee List</title>
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
        <legend>Employee List</legend>
      <table border="1" align="center" width="800">
        
          
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Salary</th>
              <th>Date of Birth</th>
            </tr>
            <tr>
              <td align="center">Md. Jahid Hasn</td>
              <td align="center">hasan@gmail.com</td>
              <td align="center">jahid</td>
              <td align="center">15000</td>
              <td align="center">23/09/1998</td>
            </tr>
            <tr>
              <td align="center">Julia Rohoman</td>
              <td align="center">julia@gmail.com</td>
              <td align="center">julia</td>
              <td align="center">20000</td>
              <td align="center">23/09/1995</td>
            </tr>
            <tr>
              <td align="center">Rohoman</td>
              <td align="center">rohoman@gmail.com</td>
              <td align="center">rohoman</td>
              <td align="center">35000</td>
              <td align="center">25/08/1997</td>
            </tr>
        
      </table>
    </fieldset>
    <fieldset>
      <legend>Add another Employee </legend>
      <form action="../../controller/Admin/updateEmp.php" method="post">
        <table align="center">
          <tr>
              <td>User Name </td>
              <td>:<input type="text" name="userName" id=""></td>
          </tr>
          <tr>
            <td>Email </td>
            <td>:<input type="text" name="email" id=""></td>
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