<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Login as Admin</title>
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
            <a href="../index.html">Home</a>
            <a href="../loginType.html">Login</a>
            <a href="../regType.html">Registration</a>
            <a href="../aboutUS.html">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <form method="post" action="../../controller/Admin/adminLoginCheck.php"> 
        <fieldset>
          <legend>Login as Admin</legend>
          
            <table align="center">
              <tr>
                  <td>User Name</td>
                  <td>:<input type="text" name="username" id="userName" onkeyup="userNameValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="userNameErorr">

                </td>
              </tr>
              <tr>
                  <td>Password </td>
                  <td>:<input type="password" name="password" id="password" onkeyup="passwordValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="passwordErorr">

                </td>
              </tr>
            </table>	
              <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                  <a href="./adminForgatePass.html"> Forget password?</a>
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


    <!-- js code goes here -->
    <script>
      function userNameValidation() {
        var username, msg;
      
       
        username = document.getElementById("userName").value;
        
        
        if (username=="") {
          msg = "Can not be empty";
        } 
        else{
          if (username.length<2 ) {
            msg = "Must contain (2) characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("userNameErorr").innerHTML = msg;
      }
      function passwordValidation() {
        var password, msg;
      
       
        password = document.getElementById("password").value;
        
        
        if (password=="") {
          msg = "Can not be empty";
        } 
        else{
          if (password.length<8 ) {
            msg = "Must not be less than (8)characters"
          } else {
            msg = ""
          }   
        }
        

        document.getElementById("passwordErorr").innerHTML = msg;
      }
      
      
      </script>
</body>
</html>