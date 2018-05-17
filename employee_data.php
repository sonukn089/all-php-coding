<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="background-color: blue; color: white;">Employee Information</h1>

	<?php
		echo "First Name : ".$_POST['first_name']."<br>";
		echo "Middile Name : ".$_POST['middle_name']."<br>";
		echo "Last Name : ".$_POST['last_name']."<br>";
		echo "Email : ".$_POST['email']."<br>";
		echo "<hr>";
	?>	
</body>
</html>