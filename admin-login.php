<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>Admin Login</title>

<style>
	
	.account-wall
	{
		background-color: #DCDCDC;
    	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}

</style>

</head>

<body>

	<div class="container-fluid">
	
		<?php
		
			include("header.php");
		
		
		?>
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Admin Login</h3>
				
			</div>
			
		</div>
		
		<div class="row">
			
			<div class="col-sm-3"></div>
			
			<div class="col-sm-6">
				
				<div class="row">
					
					<div class="col-sm-12">
						
						<div class="account-wall">

							<center><img class="img-fluid" src="logos/admin_logo.png" width="18%" style="margin-top: 2%; margin-bottom: 2%;"></center>
							
							<form method="" action="">
								
								<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									
									<label for="admin-login-email">Enter your e-mail:</label>
									
									<input type="email" class="form-control" placeholder="someone@example.com" name="admin-login-email" required>
									
									<small id="email-help" class="form-text text-muted">We'll never share your email with anyone else.</small>
									
								</div>
								
								<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									
									<label for="admin-login-password">Enter your password:</label>
									
									<input type="password" class="form-control" placeholder="********" name="admin-login-password" required>
									
									<small id="password-help" class="form-text text-muted">Your password is secure with us.</small>
									
								</div>
								
								<div class="form-group"style=" padding-left: 3%; padding-right: 3%; padding-bottom: 2%;">
									
									<div class="form-row">
										
										<div class="col-sm-1"></div>
										
										<div class="col-sm-4">
									<div class="col-sm-1"></div>

											
											<button type="submit" name="submit" class="btn btn-block btn-primary">Login</button>
											
										</div>
										
										<div class="col-sm-1"></div>
										
										<div class="col-sm-4">
											
											<a href="forgotPass.php"><button type="button" class="btn btn-danger btn-block">Forgot Password?</button></a>
											
											<div class="col-sm-1"></div>

										</div>
										
									</div>							
									
								</div>
								
							</form>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="col-sm-3"></div>
			
		</div>
		
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>