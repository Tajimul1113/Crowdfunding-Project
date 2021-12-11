<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Delete Employee</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
  <script type="text/javascript" src="../JS/admin/emplyeedata.js"></script>
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
        <br>
        <div align="center">
        <input type="button" value="See Employee List" class="empDatabtn" id="empDatabtn" name="empData" onclick="ajax();toggle();">
        </div>
        
        <br>
        <br>
        <div class="result" id="result" align="center"></div>
    </fieldset>
    <fieldset>
      <legend>Delete Employee </legend>
      <form action="../../controller/Admin/deleteEmp.php" method="post">
        <table align="center">
          <tr>
              <td>ID</td>
              <td>: <input type="text" name="id" id=""></td>
          </tr>
          
        </table>
        <hr>
        <table align="center">
          <tr>
            <td>
              <input type="submit" name="submit" value="Delete">
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