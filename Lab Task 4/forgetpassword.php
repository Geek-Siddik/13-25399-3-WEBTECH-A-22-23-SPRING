<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password</title>
	<style>
		.center {
			margin: auto;
			width: 60%;
			border: 3px solid #73AD21;
			padding: 10px;
		}
	</style>
</head>

<body>

	<div>
		<?php include 'header.php'; ?>
	</div>

	<br>

	<div class="center" style="width:500px">
		<fieldset>
			<form action="login.php">
				<p>
				<h2>Forget Password</h2>
				</p>
				<table>
					<tr>
						<td>Enter Email</td>
						<td>:</td>
						<td><input type="text" name="email"></td>
					</tr>
				</table> <br>
				<input type="submit" name="submit">
			</form>
		</fieldset>
	</div>

	<br>

	<div>
		<?php include 'footer.php'; ?>
	</div>

</body>

</html>