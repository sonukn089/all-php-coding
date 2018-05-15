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
					<td>Gender</td>
					<td>Father Name</td>
					<td>Mother Name</td>
				</tr>
				<tr>
					<td><input type="date" name="dob"></td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
					<td><input type="text" name="fname"></td>
					<td><input type="text" name="mname"></td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td>Phone</td>
					<td>Mobile</td>
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
					<td><input type="number" name="pnumber"></td>
					<td><input type="number" name="mnumber"></td>
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
					<td>Adress</td>
					<td>City</td>
					<td>Country</td>
					<td>Postal Code</td>
				</tr>
				<tr>
					<td><input type="text" name="adress"></td>
					<td><input type="text" name="city"></td>
					<td><input type="text" name="state"></td>
					<td><input type="number" name="postal_code"></td>
				</tr>
			</table>
			<h1 style="background: red; color: white;">Education Details and Experience</h1>
			<table>
				<tr>
					<td>Graduation</td>
					<td>Post Graduation</td>
					<td>IT Skills</td>
					<td>Designation</td>
				</tr>
				<tr>
					<td>
						<select name="graduation">
							<option>Slecet-Graduation</option>
							<option>B.A</option>
							<option>BSc</option>
							<option>BCA</option>
							<option>B.Tech</option>
							<option>BBA</option>
						</select>
					</td>
					<td>
						<select name="pgraduation">
							<option>Slecet-Post Graduation</option>
							<option>MA</option>
							<option>MSc</option>
							<option>MCA</option>
							<option>M Tech</option>
							<option>MBA</option>
						</select>
					</td>
					<td><input type="text" name="skills"></td>
					<td><input type="text" name="designation"></td>

					
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>