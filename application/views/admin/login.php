<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/fa/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/css/datatables.min.css"/>
	<title>
		Login Admin
	</title>
</head>
<body>
	<div class="container">

		<form class="form-signin" method="post">
			<h2 class="form-signin-heading">Sign In Admin</h2>
			<label for="inputEmail" class="sr-only">Username</label>
			<input name="username_admin" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input name="password_admin" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<hr>
			<!-- <div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div> -->
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>

	</div>
</body>
