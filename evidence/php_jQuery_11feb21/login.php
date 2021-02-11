<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Log In</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 offset-3">
				<h2 class="text-info">Log In</h2>
				<form action="" method="post">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" placeholder="Enter password" id="password">
					</div>
					<input type="button" value="Submit" id="btns" class="btn btn-primary">

				</form>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 offset-3">
				<div id="result">
				</div>
			</div>
		</div>
	</div>
	
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function (){
			$("#btns").click(function(){
				var email = $("#email").val();
				var password = $("#password").val();
				$.post('login_check.php', {email:email, password:password}, function(data){
					$("#result").html(data);
				});
			});
		});
	</script>
</body>
</html>