<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Live bar graph</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


 <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>

<link rel="stylesheet" type="text/css" href="css-alex-style.css" />

    <script type="text/javascript">
	
	<!--Author: Syed Taqi Raza -->
			
			$(document).ready(function () {

            $.getJSON("WPSgraphlib-taqi.php", function (result){
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled:true,
				animationDuration:1500,
				theme: "theme3",
				zoomEnabled: true,
				title:{text: "WPS per BSSID"},
				subtitles:[{text:"WPS user to crack handshakes"}],

				axisX: {title: "BSSIDs"},
				axisY: {title: "WordPerSecond"},
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

    <div id="chartContainer" "></div>

</body>
</html>