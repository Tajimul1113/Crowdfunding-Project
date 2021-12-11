<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD</title>
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
    <form action="../../controller/Admin/frogatecheck.php" method="post">
    <fieldset>
      <h3 align="center">
        <input type="text" name="email" id="email" onkeyup="validation()" ><input type="submit" value="Enter Email" name="EnterEmail">
        <br>
        <div id="emailerorr"></div>

      </h3>
      
      <h1>

        

        We look up to your request..Please wait and keep checking your email. <br><br>
        

      </h1>
      
        
      
        <br><br>
    </fieldset>
    </form>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->




        <!-- js code goes here -->
        <script>
          function validation() {
            var email, msg;
          
           
            email = document.getElementById("email").value;
            emailCheck = "@gmail.com"
            
            if (email.match(emailCheck)) {
              msg = "";
            } 
            else{
              msg = "email formate should be: info@gmail.com"   
            }
            
    
            document.getElementById("emailerorr").innerHTML = msg;
          }
          
          
          </script>
</body>
</html>