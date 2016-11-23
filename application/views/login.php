<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/assets/bootstrap.min.css">
	<!-- jQuery 1.11.2 -->
	<script src="/assets/jquery.1.11.2.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="/assets/bootstrap.min.js"></script>
	<!-- Normalize.CSS -->
	<link rel="stylesheet" href="/assets/normalize.css">
	<!-- Custom Styles -->
	<link rel="stylesheet" href="/assets/styles.css">
<?php
	if($this->session->flashdata('success')){
		echo $this->session->flashdata('success');
	}
?>
<?php 
	if($this->session->flashdata('error'))
	{
?><strong>Error!</strong><br> <?= $this->session->flashdata('error'); ?>
<?php
	}
?>
<?php
	if($this->session->flashdata('logout')){
		echo $this->session->flashdata('logout');
	}
?>
  <title>User Login</title>
</head>
<body>
	<div class="container">
		<div class="row">
  		<div class="col-md-12">
				<div class="row">
				  <div class="col-md-6">
				  	<h1>Register</h1>
				  	<form action="register" method="POST">
						  <div class="form-group">
						    <label for="name">Name:</label>
						    <input type="text" class="form-control" id="name" name="name">
						  </div>
						  <div class="form-group">
						    <label for="alias">Alias:</label>
						    <input type="text" class="form-control" id="alias" name="alias">
						  </div>
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email" name="email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password:</label>
						    <input type="password" class="form-control" id="password" name="password">
						  </div>
						  <div class="form-group">
						    <label for="confirm_password">Confirm Password:</label>
						    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
						  </div>
						  <div class="form-group">
						    <label for="birthdate">Date of Birth:</label>
						    <input type="date" class="form-control" id="birthdate" name="birthdate">
						  </div>
						  <input type="submit" class="btn btn-info" value="Register">
						</form>
				 	 </div>
				  <div class="col-md-6">
						<h1>Sign In</h1>
						<form action="login" method="POST">
						  <div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" id="email" name="email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password:</label>
						    <input type="password" class="form-control" id="password" name="password">
						  </div>
						  <input type="submit" class="btn btn-info" value="Sign In">
						</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>