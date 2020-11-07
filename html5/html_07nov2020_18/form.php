<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Form</title>
</head>
<body>
	<h2>Student Information</h2>
	<form action="">
		<label>Name</label> :<br>
		<input type="text" name="name" placeholder="Enter Your Name"><br>
		<label>Roll</label> :<br>
		<input type="number" name="roll" placeholder="Enter Your Roll"><br>
		<label>Subject</label> :<br>
		<input type="checkbox" name="bangla"><label>Bangla</label>
		<input type="checkbox" name="english"><label>English</label>
		<input type="checkbox" name="math"><label>Math</label><br>
		<label>Gender</label> :<br>
		<input type="radio" name="person" value="Male"><label>Male</label>
		<input type="radio" name="person" value="Female"><label>Female</label><br>
		<label>Birth Date</label> :<br>
		<input type="date" name="birth_date"><br>
		<label>Payment</label> :<br>
		<input type="number" name="payment" placeholder="Enter Your Payment"><br>
		<label>Address</label> :<br>
		<textarea name="address" cols="30" rows="10" placeholder="Enter Your Address"></textarea><br>

		<input type="submit" value="Submit" name="">
	</form>

	<h2>Your Information</h2>
	
		<p>Name: <?php if(isset($_GET["name"])){echo $_GET["name"];} ?></p>
		<p>Roll: <?php if(isset($_GET["roll"])){echo $_GET["roll"];} ?></p>
		<p>Subject: <?php if(isset($_GET["bangla"])){echo $_GET["bangla"];} ?></p>
		<p>Person : <?php if(isset($_GET["person"])){echo $_GET["person"];} ?></p>
		<p>Birth Date: <?php if(isset($_GET["birth_date"])){echo $_GET["birth_date"];} ?></p>
		<p>Payment : <?php if(isset($_GET["payment"])){echo $_GET["payment"];} ?></p>
		<p>Address : <?php if(isset($_GET["address"])){echo $_GET["address"];} ?></p>
</body>
</html>