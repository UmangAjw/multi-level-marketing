<?php

require_once "data_source/session.php";
require_once "data_source/database_connection.php";

if(isset($_POST['login-btn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
      $SQLQuery = "SELECT * FROM users_tbl WHERE email = :email";
      $statement = $conn->prepare($SQLQuery);
      $statement->execute(array(':email' => $email));

      while($row = $statement->fetch()) {
        $id = $row['id'];
        $hashed_password = $row['password'];
        $username = $row['username'];
		$fname = $row['f_name'];
		$lname = $row['l_name'];
		$random_id = $row['random_id'];
		$lev = $row['level'];

        if(password_verify($password, $hashed_password)) {
          $_SESSION['id'] = $id;
		  $_SESSION['fname'] = $fname;
		  $_SESSION['lname'] = $lname;
		  $_SESSION['email'] = $email;
		  $_SESSION['random_id'] = $random_id;
		  $_SESSION['lev'] = $lev;
          header('location: dashboard.php');
        }
        else {
          echo "Error: Invalid username or password";
        }
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
}

?>


<?php
	// $SQLQuery = "SELECT * FROM users_tbl WHERE id = :id";
	// $statement = $conn->prepare($SQLQuery);
    // $statement->execute(array(':id' => $_SESSION['id']));
	// $row = $statement->fetch();
	
	if ($_SESSION == null) {
?>
<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>Customer Login</title>

<style>
	
	.account-wall
	{
		background-color: #DCDCDC;
    	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}

	.special-login {
		color: white;
		position: relative;
		margin-top: 30px;
	}
	

	.logo-container {
		display: flex;
		justify-content: center;
		flex-direction: column;
		align-items: center;
		border-top: 2px solid #aaa;
		padding: 10px 20px 30px 20px;
	}

	.logo-container .logos {
		display: flex;
		justify-content: center;
		flex-direction: row;
	}

	.logo-container .logos .logo {
		padding: 5px 10px;
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
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Customer Login</h3>
				
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
									
									<input type="text" class="form-control" placeholder="someone@example.com" name="email" required>
									
									<small id="email-help" class="form-text text-muted">We'll never share your data with anyone else.</small>
									
								</div>
								
								<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									
									<label for="student-login-password">Enter your password:</label>
									
									<input type="password" class="form-control" placeholder="********" name="password" required>
									
									<small id="password-help" class="form-text text-muted">Your password is secure with us.</small>
									
								</div>
								
								<div class="form-group"style=" padding-left: 3%; padding-right: 3%;">
									
									<div class="form-row">
										
										<div class="col-sm-1"></div>
										
										<div class="col-sm-4">
											
											<button type="submit" name="login-btn" class="btn btn-block btn-primary">Login</button>

										</div>
										
										<div class="col-sm-1"></div>
										
										<div class="col-sm-1"></div>
										
										<div class="col-sm-4">
											
											<a href="forgotPass.php"><button type="button" class="btn btn-danger btn-block">Forgot Password?</button></a>
											
										</div>
										
										<div class="col-sm-1"></div>
										
									</div>
									
								</div>
								
						
								<div class="form-group text-center" style="padding-left: 3%; padding-right: 3%; padding-bottom: 2%;">
								
									<div class="form-row">
										
										<div class="col-sm-12 text-center">
											
											<h6>Not a part of this system yet? <a href="customer-signup.php">Sign up here!</a></h6>
											
										</div>
										
									</div>
									
								</div>

								<div class="logo-container">
									<p class="logo-text">Or Connect With</p>
									<div class="logos">
										<a href= "http://www.facebook.com" target="_blank" class="logo"><img src="logos/icons8-facebook-480.png" width="40px"></a>
										<a href= "http://www.gmail.com" target="_blank" class="logo"><img src="logos/google-logo.png" width="40px" height="40px"></a>
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


<?php
	} else {
		header('location: dashboard.php');
	}
?>