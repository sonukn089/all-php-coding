<!DOCTYPE html>
<html>
<head>
	<title>Student Information Page</title>
</head>
<body>

</body>
</html>
<h1 style="background-color: #ff8000;">Student Information</h1>
<?php

	echo "Scholar Number : ".$_POST['scholar_no']."<br>";
	echo "First Name : ".$_POST['first_name']."<br>";
	echo "Middile Name : ".$_POST['middle_name']."<br>";
	echo "Last Name : ".$_POST['scholar_no']."<br>";
	echo "<hr>";
?>	
<?php
	echo "Date of birth : ".$_POST['bday']."<br>";
	echo "Gender : ".$_POST['gender']."<br>";
	echo "Blood Group : ".$_POST['middle_name']."<br>";
	echo "Birth Place : ".$_POST['scholar_no'];
	echo "<hr>";
?>
<?php
	echo "Mother Tongue : ".$_POST['mother_tongue']."<br>";
	echo "Category : ".$_POST['category']."<br>";
	echo "Religion : ".$_POST['religion']."<br>";
	echo "Address Line 1 :".$_POST['address1']."<br>";
	echo "<hr>";
?>
<?php
	echo "Address Line 2 : ".$_POST['address2']."<br>";
	echo "City : ".$_POST['city']."<br>";
	echo "State : ".$_POST['state']."<br>";
	echo "pin".$_POST['pin']."<br>";
	echo "<hr>";
?>
<?php
	echo "Country : ".$_POST['country']."<br>";
	echo "Phone No : ".$_POST['phone']."<br>";
	echo "Mobile No : ".$_POST['mobile']."<br>";
	echo "Email : ".$_POST['email']."<br>";
	echo "<hr>";
?>
<h1 style="background-color: #ff8000;">Parrent Information</h1>
<?php
	echo "Father Name : ".$_POST['fname']."<br>";
	echo "Mother Name : ".$_POST['mname']."<br>";
	echo "Caretaker : ".$_POST['caretaker']."<br>";
	echo "Relation : ".$_POST['relation']."<br>";
	echo "<hr>";
?>
<?php
	echo "Father Education : ".$_POST['feducation']."<br>";
	echo "Mother Education : ".$_POST['meducation']."<br>";
	echo "Father Occupation : ".$_POST['foccupation']."<br>";
	echo "Mother Occupation : ".$_POST['moccupation']."<br>";
	echo "<hr>";
?>
<?php
	echo "Family Annual Income : ".$_POST['fai']."<br>";
	echo "Father Address : ".$_POST['fadd']."<br>";
	echo "Father City : ".$_POST['fcity']."<br>";
	echo "Father State : ".$_POST['fstate']."<br>";
	echo "<hr>";
?>
<?php
	echo "Father Pin : ".$_POST['fpin']."<br>";
	echo "Father Counrty : ".$_POST['fcountry']."<br>";
	echo "Phone Number : ".$_POST['fphone']."<br>";
	echo "Father's Mobile No : ".$_POST['fmobile']."<br>";
	echo "<hr>";
?>
<?php
	echo "Mother's Mobile No : ".$_POST['mmobile']."<br>";
	echo "Select Transport Service : ".$_POST['transport']."<br>";
	echo "Password : ".$_POST['password']."<br>";
	echo "Confirm Password : ".$_POST['cpassword']."<br>";
	echo "<hr>";
?>
<h1 style="background-color: #ff8000;">School Information</h1>
<?php
	echo "Admission date : ".$_POST['adate']."<br>";
	echo "Class of add : ".$_POST['class']."<br>";
	echo "Section : ".$_POST['section']."<br>";
	echo "Stream : ".$_POST['stream']."<br>";
	echo "<hr>";
?>

<?php
	echo "Class :".$_POST['pclass']."<br>";
	echo "Passing Year : ".$_POST['pyear']."<br>";
	echo "School Name : ".$_POST['sname']."<br>";
	echo "Roll No Marks : ".$_POST['roll']."<br>";
	echo "Percentages % : ".$_POST['percentage']."<br>";
	echo "Subject : ".$_POST['subject']."<br>";
?>

