<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
</head>
<body>

	<?php 
		include "header.php"
	?>

	<form action="Controller/createstudent.php" method="POST" enctype="multipart/form-data">
		<fieldset style="width: 400px;">
			<legend><h2>Add Student</h2></legend>
			<table>

			<tr>
				<td>Class</td>
				<td></td>
				<td>
					<label for="class"></label>
					<select name="class" id="class">
						<option value="null"></option>
						<option value="One">One</option>
						<option value="Two">Two</option>
						<option value="Three">Three</option>
						<option value="Four">Four</option>
						<option value="Five">Five</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Section</td>
				<td>:</td>
				<td>
					<input type="radio" name="section" id="A"value="A">
					<label for="A">A</label>

					<input type="radio" name="section" id="B"value="B">
					<label for="B">B</label>

					<input type="radio" name="section" id="C"value="C">
					<label for="C">C</label>
				</td>
				
			</tr>

			<tr>
				<td>Student Name</td>
				<td>:</td>
				<td><input type="text" name="studentname" id="studentname"></td>
			</tr>

			<tr>
				<td>Roll</td>
				<td>:</td>
				<td><input type="number" name="roll" id="roll"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>

			<tr>
				<td>Present Address</td>
				<td>:</td>
				<td><input type="text" name="presentaddress" id="presentaddress"></td>
			</tr>

			<tr>
				<td>Contact Number</td>
				<td>:</td>
				<td><input type="number" name="contactnumber" id="contactnumber"></td>
			</tr>
		</table>
		<input type="file" name="image"> <br><br>

		<input type="submit" name = "createstudent" value="Create">
  		<input type="reset">
		
		</fieldset>		
	</form>

</body>
</html>