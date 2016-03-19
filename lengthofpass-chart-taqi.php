<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	
    <title>Live bar graph</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


 <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <script type="text/javascript">
	
	
			<!--Author: Syed Taqi Raza-->
			//This script is used to generate the bar chart for the	
			//characters of password length, 
			//Includes the passlengthlib-taqi.php to send queries to database
			$(document).ready(function () {

            $.getJSON("passlengthlib-taqi.php", function (result){
			var chart = new CanvasJS.Chart("chartContainer3", {
					
					
					animationEnabled:true,
					animationDuration:1000,
					
					title:{text: "Passlength"},
					
					axisY: {title: 'Password Length'},
					axisX: {title: "Index of passwords", minimum:0, },
							
					
					data:
					[
						{
											
							type : 'bar',
					
							dataPoints:result
							
						}
					
				
					]
				
				
					});
			
				chart.render();

				
				});
			});
        
    </script>
	
</head>
<body>

    <div id="chartContainer3" ></div>

</body>
</html>