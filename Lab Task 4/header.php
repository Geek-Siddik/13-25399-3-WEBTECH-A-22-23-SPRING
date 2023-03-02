<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		.top-container {
			background-color: grey;
			padding: 30px;
			text-align: center;
		}

		.header {
			overflow: hidden;
			padding: 10px 16px;
			background: #555;
			background-color: grey;
			color: white;
		}

		.content {
			padding: 16px;
		}

		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
		}

		.sticky+.content {
			padding-top: 102px;
		}

		a:link,
		a:visited {
			background-color: lightseagreen;
			color: white;
			padding: 10px 15px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
		}

		a:hover,
		a:active {
			background-color: lightslategray;
		}
	</style>
</head>

<body>

	<div style="width:auto; height:100px; border:1px solid #000;">
		<img src="FAITHIT logo.png" height="93px" width="98px" style="margin-left: 10px; margin-top: 10px;">

		<div style="float: right; margin-top: 40px; margin-right: 10px;">
			<a href="home.php">Home</a> |
			<a href="login.php"><?php
								if (isset($_SESSION['username']))  {
									echo $_SESSION['username'];
								} else {
									echo 'Account';
								} ?></a> |
			<a href="registration.php">Registration</a>

		</div>
	</div>

	<script>
		window.onscroll = function() {
			myFunction()
		};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
		}
	</script>

</body>

</html>