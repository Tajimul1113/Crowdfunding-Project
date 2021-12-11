<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Update Profile</title>
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
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>
              <li><a href="./dashBoard.html">Dashboard</a></li>
              <li><a href="./adminProfile.php">View Profile</a></li>
              <li><a href="./adminUpdateProfile.html">Edit Profile</a></li>
              <li><a href="./adminChangePic.html">Change Profile Picture</a></li>
              <li><a href="./adminChangePassword.html">Change Password</a></li>
              <li><a href="./donateToApplicant.html">Donate</a></li>
              <li><a href="./employeeList.html">Employee List</a></li>
              <li><a href="./applicantList.html">Applicant List</a></li>
              <li><a href="./donnerList.html">Donner List</a></li>
              <li><a href="./transctionDetails.html">Transaction Details</a></li>
              <li><a href="./postNotice.html">Post A Notice</a></li>
            </ul>
          </td>
          <td>
            
              <form action="../../controller/Admin/adminUpdateCheck.php" method="post">
                  <fieldset>
                    <legend>Edit Profile</legend>
                    
                    <table>
                      <tr>
                        <td>Name &nbsp;&nbsp;</td>
                        <td>:<input type="text" id="name" name="name" onkeyup="nameValidation()"></td>
                        <td id="nameError"></td>
                      </tr>
                    </table>
                    <hr>
                    <table>
                      <tr>
                        <td>Email &nbsp;&nbsp;</td>
                        <td>:<input type="text" id="email" name="email" onkeyup="emailValidation()"></td>
                        <td id="emailerorr"></td>
                      </tr>
                    </table>
                    <hr>
                    <table>
                      <tr>
                        <td>Gender &nbsp;&nbsp;</td>
                        <td>:<input type="radio" name="gender" value="Male" checked>
                          <label class="male">Male</label>
                      
                          <input type="radio" name="gender" value="Female">
                          <label class="female">Female</label>
                      
                          <input type="radio" name="gender" value="Other">
                          <label class="other">Other</label></td>
                      </tr>
                    </table>
                    <hr>
                    <table>
                      <tr>
                        <td>Date of Birth &nbsp;&nbsp;</td>
                        <td>:<input type="text" id="date" name="date" size="5" onkeyup="dateValidation()"> /
                          <input type="text" id="month" name="month" size="5" onkeyup="monthValidation()"> /
                          <input type="text" id="year" name="year" size="6" onkeyup="yearValidation()"><i> (dd/mm/yyyy)</i></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="date" id="dayErorr"></label>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="month" id="monthError"></label>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="year" id="yearError"></label>
                         
                        </td>
                        
                      </tr>
                    </table>
                    <hr>
                    <input type="submit" name="update" value="Update">
                  
                  </fieldset>
              </form>
            
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




            <!-- js code goes here -->
            <script>
              function nameValidation() {
                var  msg,name;
              
               
                name = document.getElementById("name").value;
                nameCheck = " "
                
                if (name.match(nameCheck)) {
                  msg = "OK";
                } 
                else{
                  msg = "Ex: FirstName LastName" ;  
                }
                
        
                document.getElementById("nameError").innerHTML = msg;
              }
              function emailValidation() {
                var email, msg;
              
               
                email = document.getElementById("email").value;
                emailCheck = "@gmail.com"
                
                if (email.match(emailCheck)) {
                  msg = "OK";
                } 
                else{
                  msg = "Ex: info@gmail.com";   
                }
                
        
                document.getElementById("emailerorr").innerHTML = msg;
              }
              function dateValidation() {
                var  msg,date;
              
               
                date = document.getElementById("date").value;
                var intdate = parseInt(date); 
                
                if (intdate>=1 && intdate<=31) {
                  msg = "Valid";
                } 
                else{
                  msg = "invalid";   
                }
                
        
                document.getElementById("dayErorr").innerHTML = msg;
              }
              function monthValidation() {
                var msg,month;
              
               
                month = document.getElementById("month").value;
                var intmonth = parseInt(month);
                
                if (intmonth>=1 && intmonth<=12) {
                  msg = "Valid";
                } 
                else{
                  msg = "invalid";   
                }
                
        
                document.getElementById("monthError").innerHTML = msg;
              }
              function yearValidation() {
                var msg,year;
              
               
                year = document.getElementById("year").value;
                var intyear = parseInt(year);
                
                
                if (intyear < 2003 && intyear>1960 ) {
                  msg = "Valid";
                } 
                else{
                  msg = "invalid" ;  
                }
                
        
                document.getElementById("yearError").innerHTML = msg;
              }
              
              
              </script>
</body>
</html>