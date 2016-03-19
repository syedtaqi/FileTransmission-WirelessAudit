
		
		

<?php

//Author: Syed Taqi Raza
//Instruction: Include this php file in the same directory
// as main.php. This php script is used to get character length 
//from net4901 table
//NET4901- Fourth year Network technology project
header('Content-Type: application/json');

$con = mysqli_connect("127.0.0.1","root","","net4901_mysql");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT LENGTH(Password) AS pVAL FROM net4901");
    
	while($row = mysqli_fetch_array($result))
    {        
        $passpoint = array("y" => $row['pVAL']);
        
        array_push($data_points, $passpoint);        
    };
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
	
	
	
	
}
mysqli_close($con);

?>