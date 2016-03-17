<!DOCTYPE html>
<html lang="en">

<head>
 <title> NET4901 - Network technology project </title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>

 
 <link rel="stylesheet" type="text/css" href="css-bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css-alex-style.css" />

<!--Javascript link by taqi -->
<link rel ="stylesheet" type="text/css" href "taqi-css-style.css"/>
</head>

 <body>

<!--
<nav class="navbar navbar-default">
 <div class="container-fluid">
   <div class="navbar-header">
      <a class="navbar-brand hred="#"> WPA2 Handshake Rating </a>
  </div>

     <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#"> About the project </a><li>
        <li><a href="#"> About us </a><li>
     </ul>
   </div>
</nav>
-->

<!-- Alex Comment: Nav Bar redone -->
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
                <div class="navbar-header"> <!-- base of the navbar -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">WPA Recovery Thingy Project</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About the project</a></li>
                                <li><a href="#">About us</a></li>
                        </ul>
                </div>
        </div>
</nav>


<div class="container" role="main">
        <div class="c1">
                <!-- mysql php script -->
                <?php include 'php-alex-sql.php';?>

        </div>
		
        <div class="c2">
				<!--mysql php script "word per second" from taqi for pie chart-->
				<?php include "WPS-taqi.php";?>
           </div>
		
		
        <div class="c3">
				<!--mysql php script word count from taqi bar chart -->
				<?php include "graph-bar-taqi.php";?>
				
           </div>
		   
</div>

</body>
</html>

