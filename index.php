<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Assignment 8</title>
</head>
<body>
	<div class="container">
        <div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header bg-success">
						<h3 style="color:#fff">Login Form</h3>
					</div>
					<div class="card-body">
						<form method="post" action="login.php">
							<div class="form-group">
								<label for="email">Email Address:</label>
								<input class="form-control" type="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input class="form-control" type="password" name="password" required>
							</div>
							<input class="btn btn-success btn-block mt-1" type="submit" name="submit" value="Register">
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header bg-success">
						<h3 style="color:#fff">Registration form</h3>
					</div>
					<div class="card-body">
						<form method="post" action="register.php">
							<div class="form-group">
								<label for="firstName">First Name:</label>
								<input class="form-control" type="text" name="firstName" required>
							</div>
							<div class="form-group">
								<label for="lastName">Last Name:</label>
								<input class="form-control" type="text" name="lastName" required>
							</div>
							<div class="form-group">
								<label for="email">Email Address:</label>
								<input class="form-control" type="email" name="email" required>
							</div>
							<div class="form-group">
								<label for="password">Password:</label>
								<input class="form-control" type="password" name="password" required>
							</div>
							<div class="form-group">
								<label for="confirmPassword">Confirm Password:</label>
								<input class="form-control" type="password" name="confirmPassword" required>
							</div>
							<input class="btn btn-success btn-block mt-1" type="submit" name="submit" value="Register">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>



