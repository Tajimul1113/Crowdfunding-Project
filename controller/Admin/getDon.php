<?php
  require_once('../../Model/Admin/adminModel.php');
  $users =   getDoninfo();
  
	$data = '<table border="1">
					<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>User Name</th>
              <th>Date of Birth</th>
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>
                      <td>{$users[$i]['id']}</td>
                      <td>{$users[$i]['name']}</td>
                      <td>{$users[$i]['email']}</td>
                      <td>{$users[$i]['username']}</td>
                      <td>{$users[$i]['dateOfBirth']}</td>  
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>