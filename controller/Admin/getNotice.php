<?php
   require_once('../../Model/Admin/adminModel.php');
   $users =   getAllAdminNotice();

	$data = '<table >
					<tr>
              
              <th align="center">User Name</th>
              <th align="center">Notice</th>
              
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>
                      
                      <td>{$users[$i]['username']}</td>
                      <td>{$users[$i]['notice']}</td>
                      
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>