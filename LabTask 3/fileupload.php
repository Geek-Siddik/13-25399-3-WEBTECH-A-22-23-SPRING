<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

	<div class="container" style="width: 500px;">
		<form method="post" action="picupload.php" enctype="multipart/form-data">
			<fieldset>
				<legend><h2>Profile Picture</h2></legend>

				<img src="images/image5.png" height="300px" width="300px">
				<input type="file" name="file_to_upload" value="Choose a file"> <br>
				<hr>
				<input type="submit" name="submit">

			</fieldset>
		</form>
	</div>

</body>
</html>