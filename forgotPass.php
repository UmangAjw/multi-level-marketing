<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>Forgot Password</title>

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

	<?php


		// session_start();

		// if(isset($_POST['customer-login-verify'],$_POST['customer-login-password']))
		// {

		// 	$entered_email = $_POST['customer-login-verify'];
		// 	$entered_password = $_POST['customer-login-password'];

		// 	$query = "SELECT user.id,userstatus,studentmasterstatus,enrolmentnumber,password FROM user JOIN studentmaster ON user.id=studentmaster.id WHERE studentmaster.enrolmentnumber='$entered_enrolment'";

		// 	$result = mysqli_query($conn,$query);

		// 	if(mysqli_num_rows($result)<1)
		// 	{
		// 		echo "No Enrolment Number Exists!";
		// 	}
		// 	else
		// 	{
		// 		$array = mysqli_fetch_assoc($result);

		// 		$student_password = $array['password'];

		// 		if($entered_password != $student_password)
		// 		{
		// 			echo "Wrong password entered!";
		// 		}
		// 		else
		// 		{
		// 			if($array['userstatus']==0)
		// 			{
		// 				echo "Correct password!";

		// 				$_SESSION['student-id']=$array['id'];

		// 				$_SESSION['student-enrolment-number']=$array['enrolmentnumber'];

		// 				header("Location: student-home.php");
		// 			}
		// 			else
		// 			{
		// 				echo "Account Deactivated!";
		// 			}
		// 		}
		// 	}
		// }

	?>

	<div class="container-fluid">
	
		<?php
		
			include("header.php");
		
		?>
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Forgot Password</h3>
				
			</div>
			
		</div>
		
		<div class="row">
			
			<div class="col-sm-3"></div>
			
			<div class="col-sm-6">
				
				<div class="row">
					
					<div class="col-sm-12">
						
						<div class="account-wall">

							<center><img class="img-fluid" src="logos/student_logo.png" width="15%" style="margin-top: 2%; margin-bottom: 2%;"></center>
							
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								
								<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									
									<label for="student-login-verify">Enter your email-id:</label>
									
									<input type="text" class="form-control" placeholder="Enter Your Registered Email" name="student-login-verify" required>
									
									
								</div>

                                <center><p class="card-text">OR</p></center>

                                <div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									
									<label for="student-login-password">Enter your Number:</label>
									
									<input type="password" class="form-control" placeholder="Enter Your Regestered Number" name="student-login-password" required>
																		
								</div>
								
								<div class="form-row" style="padding-left: 3%; padding-right: 3%;">
						
							<div class="col-sm-12 text-center">
						
								<div class="form-group">
								
                                 <a href="forgotPass.php"><button type="submit" class="btn btn-success">Forgot Password</button></a>
								
								</div>
							
							</div>
						
						</div>
								
 						
								<div class="form-group text-center" style="padding-left: 3%; padding-right: 3%; padding-bottom: 2%;">
							

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