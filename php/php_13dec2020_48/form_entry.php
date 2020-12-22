<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Form</title>
	<style>
		fieldset{
			width: 30%;
			padding: 10px;
			border: 1px solid gray;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<h2>Information</h2>
	<form action="form_submit.php" method="post">
		<fieldset>
			<legend>Personal Information</legend>
			<label class="fullname">Full Name : </label><br>
			<input type="text" name="fullname" placeholder="Enter Your Full Name"><br>
			<label for="gender">Gender : </label><br>
			Male <input required type="radio" name="gender" value="Male">
			Female <input type="radio" name="gender" value="Female">
		</fieldset>
		<fieldset>
			<legend>Other</legend>
			<label for="email">Email : </label><br>
			<input type="email" name="email" placeholder="Enter Your Valid Email"><br>
			<label for="">Password : </label><br>
			<input type="password" name="password"><br>
			
			<label for="district">Districts : </label><br>
			<select name="district" id="">
				<option value="">Select One</option>
				<optgroup label="Dhaka">
					<option value="Dhaka">Dhaka</option>
					<option value="Mohakhali">Mohakhali</option>
					<option value="Paltan">Paltan</option>
				</optgroup>
				<optgroup label="Rajshahi">
					<option value="Rajshahi">Rajshahi</option>
					<option value="Naogoan">Naogoan</option>
					<option value="Nachol">Nachol</option>
					<option value="Chapai">Chapai</option>
					<option value="Rohanpur">Rohanpur</option>
					<option value="Pabna">Pabna</option>
					<option value="Natore">Natore</option>
					<option value="Shirajganj">Shirajganj</option>
				</optgroup>
				<option value="Khulna">Khulna</option>
				<option value="Sylhet">Sylhet</option>
				<option value="Barishal">Barishal</option>
			</select>
			<br>
			<label for="">Hobbies : </label><br>
			Cricket <input type="checkbox" name="hobbies[]" value="Cricket">
			Football <input type="checkbox" name="hobbies[]" value="Football">
			Baseball <input type="checkbox" name="hobbies[]" value="Baseball">
			Swimming <input type="checkbox" name="hobbies[]" value="Swimming">
			<br>
			<label for="">Address</label><br>
			<textarea name="address" id="" cols="30" rows="10"></textarea>
		</fieldset>
		<input type="submit" name="submit" value="Send">
	</form>
</body>
</html>