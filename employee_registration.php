<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
</head>
<body>
	<center>
		<h1 style="background: red; color: white;">Employee Registration Form</h1>
		<form>
			<table>
				<tr>
					<td>First Name</td>
					<td>Middile Name</td>
					<td>Last Name</td>
					<td>Email</td>
				</tr>
				<tr>
					<td><input type="text" name="first_name"></td>
					<td><input type="text" name="middle_name"></td>
					<td><input type="text" name="last_name"></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>D.O.B</td>
					<td>Father Name</td>
					<td>Mother Name</td>
				</tr>
				<tr>
					<td><input type="date" name="dob"></td>
					<td><input type="text" name="fname"></td>
					<td><input type="text" name="mname"></td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td>Gender</td>
					<td>Marital Status</td>
				</tr>
				<tr>
					<td>
						<select name="nationality" required="true">
							<option>Choose-Nationality</option>
							<option>Indian</option>
							<option>Australia</option>
							<option>New Zeland</option>
							<option>South Africa</option>
							<option>Others</option>
						</select>
					</td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
					<td>
						<select name="marital" required="true">
							<option>Choose-Marital Status</option>
							<option>Single</option>
							<option>Married</option>
							<option>Unmarried</option>
						</select>
					</td>
				</tr>
				<tr>
					
					<td>Phone</td>
					<td>Mobile</td>
				</tr>
				<tr>
					
					<td><input type="number" name="pnumber"></td>
					<td><input type="number" name="mnumber"></td>
				</tr>
				<tr>
					<td>Adress</td>
					<td>City</td>
					<td>State</td>
				</tr>
				<tr>
					<td><input type="text" name="adress"></td>
					<td><input type="text" name="city"></td>
					<td><input type="text" name="state"></td>
				</tr>
				<tr>
					<td>Postal Code</td>
					<td>City</td>
					<td>State</td>
				</tr>
				<tr>
					<td><input type="text" name="adress"></td>
					<td><input type="text" name="city"></td>
					<td><input type="text" name="state"></td>
				</tr>


			</table>
		</form>
	</center>	
</body>
</html>