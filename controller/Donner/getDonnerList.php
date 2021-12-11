<?php
  require_once('../../Model/Donner/donnerModel.php');
  $users =   getDonnerList();
  
	$data = '<table border="1.5">
					<tr>
              <th>ID</th>
              <th>Donner Name</th>
              <th>Donner Email</th>
              

             
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>


                      <td>{$users[$i]['did']}</td>
                      <td>{$users[$i]['dname']}</td>
                      <td>{$users[$i]['demail']}</td>
                      

                      
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>