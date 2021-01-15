<!DOCTYPE html>
<html>
<head>
	<title>PHP Class 3(1st) if else</title>

	<!-- link with css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- font link -->
	<link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
<div class ="div1" >
<h1>
	
</h1>
</div>
<div class="div2">

	<!-- Form for get Input -->
		<form action="index.php" method="get">
		<input type="text" name="username" placeholder="Your Name">		
		<input type="number" name="result" placeholder="Your Result">		
		<input type="text" name="gender" placeholder="Vaia/Apu">		
		<input type="submit">
		</form>
		<br>

<?php

 $name = $_GET["username"];
 $people = $_GET["gender"];
 $marks = $_GET["result"];

 if ($marks >=0 && $marks <=2){

	echo "<span style='color:#000000;'><h1>name $people Please, put the value.</h1></span>";
}
elseif ($marks >=3 && $marks <=39) {

	echo "<span style='color:#641E16;'><h1>$name $people we are sorry to saying you that, you have failed. Please, try again. You got $marks</h1></span>";
}
elseif ($marks >=40 && $marks <=49) {
	echo "<span style='color:#1D8348;'><h1>$name $people you passed with name D Grade. You got $marks</h1></span>";
}

elseif ($marks >=50 && $marks <=59) {
	echo "<span style='color:#0E6251'><h1>$name $people you passed with C Grade. You got $marks</h1></span>";
}
elseif ($marks >=60 && $marks <=69) {
	echo "<span style='color:#21618C'><h1>$name $people you passed with name  B Grade. You got $marks</h1></span>";
}
elseif ($marks >=70 && $marks <=79) {
	echo "<span style='color:#154360'><h1>$name $people you passed with name A Grade. You got $marks</h1></span>";
}
elseif ($marks >=80 && $marks <=89) {
	echo "<span style='color:#1C2833'><h1>$name $people you passed with name A+ Grade</h1></span>";
}
elseif ($marks >=90 && $marks <=100) {
	echo "<span style='color:#5B2C6F'><h1>$name $people you are our <span style='color:#F5B041'>Gold.</span> You got $marks</h1></span>";
}
else{
	echo "<span style='color:#900C3F'><h1>$name are you sure! Please, put the right value</h1></span>";
}
?>
	
	<!-- link with jquery	 -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script>
		
	</script>
</div>
<div class="div3">
<h1>
	
</h1>
</div>
<h2>Minhajul Islam Galib</h2>
<ul>
<li><button class="btn"><a href="result sheet class3(2nd)" target="_blank">Result Sheet</a></button></li>

<li><button class="btn1"><a href="CHADA" target="_blank">চাঁদা  Switch</a></button></li>
</ul>
</body> 
</html>	
