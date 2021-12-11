<?php
  require_once('../../Model/Admin/adminModel.php');
  $users =   donationDetails();
	$data = '<table border="1">
					<tr>
              
              <th>Donner Name</th>
              <th>Donner Email</th>
              <th>Applicant Name</th>
              <th>Donation Amount</th>
              
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>
                      
                      <td>{$users[$i]['dname']}</td>
                      <td>{$users[$i]['demail']}</td>
                      <td>{$users[$i]['aname']}</td>
                      <td>{$users[$i]['damount']}</td>
                       
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>