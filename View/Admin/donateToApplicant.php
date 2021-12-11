<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Donate to Applicant</title>
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
      <form action="../../controller/Admin/donateMoney.php" method="post">
        <fieldset>
          <legend>Donate to Applicant</legend>
          
          <table align="center">
            <tr>
              <td>Applicant Name</td>
              <td>:<input type="text" name="name" id=""></td>
            </tr>
            <tr>
              <td>Amount</td>
              <td>:
                <input type="radio" name="amountDonate"value="1000" checked >
                <label class="1000">1000</label>
                <input type="radio" name="amountDonate" value="10000">
                <label class="10000">10000</label>
                <input type="radio" name="amountDonate" value="50000">
                <label class="50000">50000</label>
                <input type="radio" name="amountDonate" value="100000">
                <label class="100000">100000</label>
              </td>
            </tr>
            <br>
            <tr>
              <td>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="donate" value="Donate">
              </td>
            </tr>
            
          </table>
          
        
        </fieldset>
      </form>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>