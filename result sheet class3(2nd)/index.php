<!DOCTYPE html>
<html>
<head>
	<title>Result sheet with Switch Class 3(2nd)</title>

	<!-- CSS link -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- FONT css -->
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
	<!-- MEDIA link -->
	<link rel="stylesheet" type="text/css" href="img">

</head>
<body>
	<div class="First">
		<h1>
			
		</h1>
		
	</div>
	
	<div class="second">
		<!-- INPUT FORM -->

		<form action="index.php" method="get">
			<input type="text" name="name" placeholder="NAME">
			<input type="number" name="number" placeholder="Student ID">
			<input type="submit">
		</form>
		<br>
	<?php

	$fullname = $_GET["name"];
	$student = $_GET["number"];

	switch ($student) {
		case 1:
			echo "<span style='color:#512E5F'><h1>$fullname Congratulations!! You got 81.</h1></span>";
			break;
		
		case 2:
			echo "<span style='color:#154360'><h1>$fullname Congratulations!! You got 82.</h1></span>";
			break;
		
		case 3:
			echo "<span style='color:#0E6251'><h1>$fullname Congratulations!! You got 83.</h1></span>";
		break;
		
		case 4:
			echo "<span style='color:#7D6608'><h1>$fullname Congratulations!! You got 84.</h1></span>";
		break;
		
		case 5:
			echo "<span style='color:#CB4335'><h1>$fullname Congratulations!! You got 85.</h1></span>";
		break;
		
		default:
			echo "<span style='color:#17202A'><h1>$fullname Congratulations!! Put the value here.</h1></span>";
			break;
	}

	?>

	</div>
	
	<div class="third">
		<h1>
			
		</h1>
	</div>

	<h2>Minhajul Islam Galib</h2>

<button><a href="http://localhost/class3(1st)1">HOME PAGE</a></button>
</body>
</html>