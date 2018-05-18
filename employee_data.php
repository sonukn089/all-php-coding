<?php
	
	


?>


















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
	<?php
		echo "D.O.B : ".$_POST['dob']."<br>";
		echo "Gender : ".$_POST['gender']."<br>";
		echo "Father Name : ".$_POST['fname']."<br>";
		echo "Mother Name : ".$_POST['mname']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "Nationality : ".$_POST['nationality']."<br>";
		echo "Phone : ".$_POST['pnumber']."<br>";
		echo "Mobile : ".$_POST['mnumber']."<br>";
		echo "Marital Status : ".$_POST['marital']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "Address : ".$_POST['address']."<br>";
		echo "City : ".$_POST['city']."<br>";
		echo "Country : ".$_POST['state']."<br>";
		echo "Postal Code : ".$_POST['postal_code']."<br>";
		echo "<hr>";
	?>

	<h1 style="background-color: blue; color: white;">Education Details and Experience</h1>

	<?php
		echo "Graduation : ".$_POST['graduation']."<br>";
		echo "Post Graduation : ".$_POST['pgraduation']."<br>";
		echo "IT Skills : ".$_POST['skills']."<br>";
		echo "Designation : ".$_POST['designation']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "Previous Company : ".$_POST['previous_company']."<br>";
		echo "Deparment : ".$_POST['deparment']."<br>";
		echo "Experience : ".$_POST['experience']."<br>";
		echo "Annual Income : ".$_POST['annual']."<br>";
		echo "<hr>";
	?>

	<h1 style="background: blue; color: white;">Salary-Structures</h1>

	<?php
		echo "Cost To Company (CTC) : ".$_POST['ctc']."<br>";
		echo "Basic Salay : ".$_POST['basic_salary']."<br>";
		echo "HRA : ".$_POST['hra']."<br>";
		echo "Take Home Salary : ".$_POST['ths']."<br>";
		echo "<hr>";
	?>
	
	<?php
		echo "Employees' Provident Fund : ".$_POST['epf']."<br>";
		echo "Universal Account Number (UAN) : ".$_POST['uan']."<br>";
		echo "Employees' State Insurance : ".$_POST['esic']."<br>";
		echo "Dearness Allowance : ".$_POST['da']."<br>";
		echo "<hr>";
	?>

</body>
</html>