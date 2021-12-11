<?php
  require_once('../../Model/Applicant/applicantModel.php');
  $users =   ApplicantGetDonationDetails();

	$data = '<table border="1">
					<tr>
              <th>Donor ID</th>
              <th>Donor Name</th>
              <th>Donor Email</th>
              <th>Applicant Name</th>
              <th>Donating Amount</th>
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>
                      <td>{$users[$i]['did']}</td>
                      <td>{$users[$i]['dname']}</td>
                      <td>{$users[$i]['demail']}</td>
                      <td>{$users[$i]['aname']}</td>
                      <td>{$users[$i]['damount']}</td>  
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>