<?php
  require_once('../../Model/Admin/adminModel.php');
  $users =   getEmployeeifo();
	$data = '<table border="1">
					<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Salary</th>
              <th>Date of Birth</th>
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>
                      <td>{$users[$i]['Userid']}</td>
                      <td>{$users[$i]['name']}</td>
                      <td>{$users[$i]['email']}</td>
                      <td>{$users[$i]['userName']}</td>
                      <td>{$users[$i]['gender']}</td>
                      <td>{$users[$i]['dateOfBarth']}</td>  
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>