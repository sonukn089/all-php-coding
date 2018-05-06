<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>

	<form>
		<h1 style="background-color: #ff8000;">Student Information</h1>
		<table>
			<tr>
				<td>Scholar Number</td>
				<td>First Name</td>
				<td>Middile Name</td>
				<td>Last Name</td>
			</tr>
			<tr>
				<td><input type="text" name="scholar_no"></td>
				<td><input type="text" name="first_name"><span class="error">*</span></td>
				<td><input type="text" name="middle_name"></td>
				<td><input type="text" name="scholar_no"><span class="error">*</span></td>
			</tr>
			<tr>
				<td>Date of birth * (yyyy-mm-dd)</td>
				<td>Gender</td>
				<td>Blood Group</td>
				<td>Birth Place</td>
			</tr>
			<tr>
				<td><input type="date" name="bday" min="2000-01-02"></td>
				<td>
					<input type="radio" name="gender" value="male" checked>Male
					<input type="radio" name="gender" value="female">Female
				</td>
				<td><input type="text" name="middle_name"></td>
				<td><input type="text" name="scholar_no"></span></td>
			</tr>
			<tr>
				<td>Mother Tongue</td>
				<td>Category</td>
				<td>Religion</td>
				<td>Address Line 1</td>
			</tr>
			<tr>
				<td><input type="text" name="mother_tongue"></td>
				<td>
					<select name="category" required="true">
						<option>Choose-Category</option>
						<option>Gernal</option>
						<option>OBC</option>
						<option>SC</option>
						<option>ST</option>
					</select>
				</td>
				<td>
					<select name="religion" required="true">
						<option>Choose-Religion</option>
						<option>Hindu</option>
						<option>Muslim</option>
						<option>Christianity</option>
						<option>Others</option>
					</select>
				</td>
				<td><input type="text" name="address1"><span class="error">*</span></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
				<td>City</td>
				<td>State</td>
				<td>Pin Code</td>
			</tr>
			<tr>
				<td><input type="text" name="address2"></td>
				<td><input type="text" name="city"><span class="error">*</span></td>
				<td><input type="text" name="state"><span class="error">*</td>
				<td><input type="text" name="pin"><span class="error">*</span></td>
			</tr>

		</table>
	</form>

</body>
</html>