 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "pwad_46";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$password = $_POST["password"];
$present_address = $_POST["present_address"];
$permanent_address = $_POST["permanent_address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip_code = $_POST["zip_code"];
$check_in = $_POST["check_in"];

$insert_data = "INSERT INTO bootstrap_table (email, password, present_address, permanent_address, city, state, zip_code, check_in)
VALUES ('$email', '$password', '$present_address' , '$permanent_address', '$city', '$state', '$zip_code', '$check_in')";

if (mysqli_query($conn, $insert_data)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert_data . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 