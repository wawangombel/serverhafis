<!DOCTYPE html>
<html>

	<head>
		<title> Absensi_SMP_Assalaam </title>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<!-- CSS Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- CSS Pure -->
		<link rel="stylesheet" type="text/css" href="css/loginform.css">
	</head>

	<body>

		<!-- Bagian Background -->
		<section>
			<div class="login-box">
				<h1>Login Admin</h1>
					<form method="post" action='loginadmin.php'>
						<p> Username </p>
						<div class="form-group">
						<input type="text" name="username" placeholder="Enter your username"></div>
						<p> Password </p>
						<div class="form-group"><input type="password" name="password" placeholder="Enter your Password"></div>
						<button type="submit" name="submit" value="Login" class="btn btn-primary"> Submit </button>
						<h4>Powered by <img src="./css/images/Logo-Putih.png" alt="" height="36px;" width="90px" style="margin-left: 5px;"></h4>						
					</form>
			</div>
			
		</section>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>

</html>