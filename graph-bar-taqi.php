<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	
    <title>Live bar graph</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


 <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>

<link rel="stylesheet" type="text/css" href="css-alex-style.css" />

    <script type="text/javascript">
	
	
			<!--Author: Syed Taqi Raza-->
			$(document).ready(function () {

            $.getJSON("bargraphlib-taqi.php", function (result){
			var chart = new CanvasJS.Chart("chartContainer1", {
					
					animationEnabled: true,
					animationDuration: 2000,
					theme:"theme3",
					zoomEnabled: true,
					title:{text: "WordCounter Stats"},
					
					
					axisY: {title:"Word count", 
						includeZero: false},
					axisX : {title:"Total Words",
							},
							
					
					data:
					[
						{
											
							type : "column",
					
							dataPoints: result
						}
					
				
					]
				
				
					});
			
				chart.render();

				
				});
			});
        
    </script>
	
</head>
<body>

    <div id="chartContainer1" ></div>

</body>
</html>