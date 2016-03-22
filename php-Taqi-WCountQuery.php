<?php
//Author: Syed Taqi Raza
header('Content-Type: application/json');
$con = mysqli_connect("127.0.0.1","root","","net4901_mysql");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT WordC, wordT FROM net4901");
    
    while($row = mysqli_fetch_array($result))
    {        
        $point = array("y" => $row['WordC'] , "x" => $row['wordT']);
        
        array_push($data_points, $point);        
    };
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
	
	
	
	
}
mysqli_close($con);
?>