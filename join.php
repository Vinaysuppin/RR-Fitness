<?php
// used for database connectivity
require_once 'include\dbmscon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Join Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="shortcut icon" href="Web/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body class="bod">
	<!-- logo starts -->
	<header>
		<div class="container">
			<div class="logo" style="position: relative;
    left: 50%;">
				<a href="index.php">RR <span>Fitness</span></a>
			</div>

	</header>
	<!-- logo ends -->

	<!-- new user form starts -->
	<div class="containerr">
		<h3>We Belive You Can!</h3>
		<form action="index.php" method="post">
			<div class="formm">
				<input type="text" name="name" placeholder="Name">
			</div>
			<div class="formm">
				<input type="number" name="age" placeholder="Age">
			</div>
			<div class="formm">
				<input type="number" name="phoneno" placeholder="Phone No">
			</div>
			<div class="formm">
				<input type="email" name="emailid" placeholder="Email ID">
			</div>
			<div class="form">
				Gender: <input type="radio" name="gender" id="" value="Male">Male<input type="radio" name="gender" id="" value="Female">Female
			</div>
			Plan Type:<select class="formm" name="plan" id="">
				<option value="Basic">Basic Pack</option>
				<option value="Value">Value Pack</option>
				<option value="Premium" selected>Premium Pack</option>
			</select>
			<button class="butn" onclick="alert('Thankyou For Joining')" name="qtype" value="2">Submit</button>
		</form>
	</div>

	<!-- new user form ends -->
</body>

</html>