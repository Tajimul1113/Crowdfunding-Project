<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Change Password</title>
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
      
        <form method="POST" action="../../controller/Admin/adminEditPass.php">
          <fieldset >
            <legend> <b>CHANGE PASSWORD</b></legend>
              <table align="center">
              <tr>
                <td>Current Password <br><br></td>
                <td> :<input type="password" name="currentPass"/> 
                <br/><br> </td>
              </tr>
              <br>
            
              <tr>
                <td> New Password </td>
                <td> :<input type="password" id="newPass" name="newPass" onkeyup="validation()"/> <br/></td> 
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td id="strnth" align="center"></td>
              </tr>
              
              <tr>
                <td>Retype New Password </td>
                <td> :<input type="password" id="rePass" name="retypePass" onkeyup="match()"/> <br/></td> 
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td id="matching" align="center"></td>
              </tr>
              </table>
            <hr>
            <table align="right">
              <tr>
                <td><input type="submit" name="Submit" value="Submit" ></td>
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


    <!-- js code goes here -->
    <script>
      function validation() {
        var newpass, msg;
      
       
        newpass = document.getElementById("newPass").value;
        
        if (newpass.length < 8) {
          msg = "Too short and invalid type";
        } 
        else{
          msg = "Strong"   
        }
        

        document.getElementById("strnth").innerHTML = msg;
      }
      function match() {
        var newpass,retypepass ,msg;
      
       
        newpass = document.getElementById("newPass").value;
        retypepass = document.getElementById("rePass").value;
        
        if (retypepass==newpass) {
          msg = "Matched";
        } 
        else{
          msg = "Not Matched"   
        }
        

        document.getElementById("matching").innerHTML = msg;
      }
      </script>
</body>
</html>