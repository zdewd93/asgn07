<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	// your code here
  include('inc-rectangle-object.php');
  $height = $_POST["height"];
  $length = $_POST["length"];
  $width = $_POST["width"];
	
  $shortWall = new Rectangle();
  $longWall = new Rectangle();
    
  $shortWall->setX($height);
  $shortWall->setY($length);
  $longWall->setX($height);
  $longWall->setY($width);
  
  $totalArea = (2 * $longWall->getArea()) + (2 * $shortWall->getArea());
	print("The total area is $totalArea square feet.");
?>
</body>
</html>