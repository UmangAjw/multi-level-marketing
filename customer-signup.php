<?php

require_once "data_source/session.php";	
require_once "data_source/database_connection.php";

if(isset($_POST['signup-btn'])) {

	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$occupation = $_POST['occupation'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm-password'];

	$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                     .'0123456789');
    shuffle($seed);
    $rand = '';
    foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

	if ($password == $confirm_password) {
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);	
	}
	else {
		echo "Error: password does not match.";
	}

  try {

		$level = 0;
		$id=$_POST['referral'];
		
		$sql = 'SELECT * FROM users_tbl';
		$q = $conn->query($sql);
		$q->setFetchMode(PDO::FETCH_ASSOC);
		while ($row = $q->fetch())
		{
			if($row['random_id'] == $id)
			{
				$lvl=$row['level'];
				break;
			}	
		}
		$lvl++;

	$SQLInsert = "INSERT INTO users_tbl (f_name, m_name, l_name, email, phone, occupation, gender, city, state, password, level, referral,random_id, to_date)
				 VALUES (:fname, :mname, :lname, :email, :phone, :occupation, :gender, :city, :state, :password, :lvl,  :id,:random_id, now())";

	$statement = $conn->prepare($SQLInsert);
	$statement->execute(array(':fname' => $fname, ':mname' => $mname, ':lname' => $lname, ':email' => $email, ':phone' => $phone, ':occupation' => $occupation, ':gender' => $gender, ':city' => $city, ':state' => $state, ':password' => $hashed_password, ':lvl' => $lvl,':id' => $id ,':random_id' => $rand));
	
	//inserting in profit table
	$sql = "INSERT INTO `user_profit` (`Uid`, `Profit`) VALUES ('$rand', 0)";
	$q = $conn->query($sql);
	$q->setFetchMode(PDO::FETCH_ASSOC);
	if($statement->rowCount() == 1) {

	  header('location: customer-login.php');
	}
  }
  catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
  }

}

?>


<!-- 
/*

<?php
	
	if (isset($_POST["signup-btn"])) 
	{
		
		
	}
?>	
*/ -->


<?php

	if ($_SESSION == null) {

?>
<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>Customer Sign-Up</title>

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

		// if(isset($_POST['first-name'],$_POST['middle-name'],$_POST['last-name'],$_POST['email'],$_POST['phone_number'],$_POST['enrolment_number'],$_POST['gender'],$_POST['department'],$_POST['semester'],$_POST['class'],$_POST['password'],$_POST['confirm_password']))
		// {
		// 	$first_name=$_POST['first-name'];
		// 	$middle_name=$_POST['middle-name'];
		// 	$last_name=$_POST['last-name'];
		// 	$email=$_POST['email'];
		// 	$phone_number=$_POST['phone_number'];
		// 	$enrolment=$_POST['enrolment_number'];
		// 	$gender=$_POST['gender'];
		// 	$department=$_POST['department'];
		// 	$semester=$_POST['semester'];
		// 	$class=$_POST['class'];
		// 	$password=$_POST['password'];
		// 	$confirm_password=$_POST['confirm_password'];

		// 	$query = "SELECT * FROM studentmaster WHERE enrolmentnumber='$enrolment'";

		// 	$result = mysqli_query($conn,$query);

		// 	$resultCount = mysqli_num_rows($result);

		// 	if($resultCount<1)
		// 	{
		// 		if($class=='A')
		// 		{
		// 			$queryClass = "SELECT * FROM classmaster WHERE year='$current_year' AND department='$department' AND semester='$semester' AND classA=1";
		// 		}
		// 		if($class=='B')
		// 		{
		// 			$queryClass = "SELECT * FROM classmaster WHERE year='$current_year' AND department='$department' AND semester='$semester' AND classB=1";
		// 		}
		// 		if($class=='X')
		// 		{
		// 			$queryClass = "SELECT * FROM classmaster WHERE year='$current_year' AND department='$department' AND semester='$semester' AND classX=1";
		// 		}
		// 		if($class=='Y')
		// 		{
		// 			$queryClass = "SELECT * FROM classmaster WHERE year='$current_year' AND department='$department' AND semester='$semester' AND classY=1";
		// 		}

		// 		$resultClass = mysqli_query($conn,$queryClass);

		// 		$resultClassCount=mysqli_num_rows($resultClass);

		// 		if($resultClassCount<1)
		// 		{
		// 			echo "Class Doesn't Exist!";
		// 		}
		// 		else
		// 		{
		// 			if($password==$confirm_password)
		// 			{
		// 				$password_hash = password_hash($password,PASSWORD_DEFAULT);

		// 				$queryUser = "INSERT INTO user(userstatus,firstname,middlename,lastname,phonenumber,email,password,type,gender,address_line_1,address_line_2,city,state) VALUES (0,'$first_name','$middle_name','$last_name','$phone_number','$email','$password',0,'$gender',-1,-1,-1,-1)";

		// 				$queryStudentMaster = "INSERT INTO studentmaster(enrolmentnumber,department,semester,class,studentmasterstatus) VALUES ('$enrolment','$department','$semester','$class',0)";

		// 				if(mysqli_query($conn,$queryUser) && mysqli_query($conn,$queryStudentMaster))
		// 				{
		// 					header("Location: student-login-form.php?message=signup-successful");
		// 				}
		// 			}
		// 		}
		// 	}
		// 	else
		// 	{
		// 		header("Location: student-login-form.php?message=userexists");
		// 	}

		// }			

	?>
	
	<div class="container-fluid">

		<div class="row">
			
			<div class="col-sm-12">

				<?php

					include("header.php");
				
				?>
			
			</div>

		</div>
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Customer Sign-Up </h3>
				
			</div>
			
		</div>
		
		<div class="row">
			
			<div class="col-sm-3"></div>
			
			<div class="col-sm-6">
				
				<div class="account-wall">
					
					<center><img src="logos/student-signup_logo.png" class="img-fluid" width="15%" style="margin-top: 2%; margin-bottom: 2%;"></center>
					
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mb-3">
						
						<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
						
							<div class="form-row">
								
								<div class="col-sm-12">
									
									<label for="name">Enter your name:</label>
									
								</div>
								
							</div>
							
							<div class="form-row" id="name">
								
								<div class="col-sm-4">
									
									<input type="text" name="fname" class="form-control" placeholder="First Name" required>
									
								</div>
								
								<div class="col-sm-4">
									
									<input type="text" name="mname" class="form-control" placeholder="Middle Name" required>
									
								</div>
								
								<div class="col-sm-4">
									
									<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
									
								</div>
								
							</div>
							
						</div>
							
						<div class="form-row">
								
							<div class="col-sm-12">
									
								<div class="form-row" style="padding-left: 3%; padding-right: 3%;">
										
									<div class="col-sm-6">
										
										<div class="form-group">
											
											<div class="form-row">

												<div class="col-sm-12">

													<label for="email">Enter your email:</label>

												</div>

											</div>

											<div class="form-row">

												<div class="col-sm-12">

													<input type="email" name="email"
													pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" placeholder="someone@example.com" class="form-control" required>

												</div>

											</div>
										
										</div>
											
									</div>
										
									<div class="col-sm-6">
										
										<div class="form-group">
											
											<div class="form-row">

												<div class="col-sm-12">

													<label for="phone_number">Enter your phone number:</label>

												</div>

											</div>

											<div class="form-row">

												<div class="col-sm-12">

													<input type="text" name="phone"
													pattern="^[789]\d{9}$" placeholder="XXXXXXXXXX" class="form-control" required>

												</div>

											</div>
										
										</div>
											
									</div>
										
								</div>
									
							</div>
								
						</div>
						
						<div class="form-row" style="padding-left: 3%; padding-right: 3%;">
							
							<div class="col-sm-12">
								
								<div class="form-row">
									
									<div class="col-sm-6">
										
										<div class="form-group">
											
											<div class="form-row">
												
												<div class="col-sm-12">
													
													<label for="occupation">Enter your Occupation:</label>
													
												</div>
												
											</div>
											
											<div class="form-row">
												
											<select class="form-control" name="occupation" required>
														
														<option selected disabled>Not Selected</option>
														
														<option value="Job">Job</option>
														
														<option value="Business">Business</option>

														<option value="Student">Student</option>

														
													</select>
																									
											</div>
											
										</div>
										
									</div>
									
									<div class="col-sm-6">
										
										<div class="form-group">
											
											<div class="form-row">
												
												<div class="col-sm-12">
													
													<label for="gender">Select your gender:</label>
													
												</div>
												
											</div>
											
											<div class="form-row">
												
												<div class="col-sm-12">
													
													<select class="form-control" name="gender" required>
														
														<option selected disabled>Not Selected</option>
														
														<option value="Male">Male</option>
														
														<option value="Female">Female</option>
														
													</select>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
						
						<div class="form-row" style="padding-left: 3%; padding-right: 3%;">

							<div class="col-sm-6">

								<div class="form-group">

									<div class="form-row">

										<div class="col-sm-12">

											<label for="city">Select Your City:</label>

										</div>

									</div>

									<div class="form-row">

										<div class="col-sm-12">

											<select class="form-control" name="city">
												
												<option selected disabled>Select</option>
									
												<option value="Ahmedabad">Ahmedabad</option>
												<option value="Rajkot">Rajkot</option>
												<option value="Baroda">Baroda</option>
												<option value="Surat">Surat</option>

											</select>

										</div>

									</div>

								</div>

							</div>

							<div class="col-sm-6">

							<div class="form-row">

								<div class="col-sm-12">

									<div class="form-group">
										
										<div class="form-row">

											<div class="col-sm-12">

												<label for="state">Select State:</label>

											</div>

										</div>

										<div class="form-row">

											<div class="col-sm-12">

												<select name="state" class="form-control">
													
													<option selected disabled>Select</option>
													<option value="Gujarat">Gujarat</option>

												</select>

											</div>

										</div>

									</div>


								</div>

								</div>

							</div>

						</div>

						<div class="form-row" style="padding-left: 3%; padding-right: 3%;">

							<div class="col-sm-12">

								<div class="form-row">

									<div class="col-sm-12">

										<div class="form-group">

											<div class="form-row">

												<div class="col-sm-12">

													<label for="password">Enter password:</label>

												</div>

											</div>

											<div class="form-row">

												<div class="col-sm-12">

													<input type="password" name="password" class="form-control" placeholder="Password" required>

												</div>

											</div>

										</div>

									</div>

									<div class="col-sm-12">

										<div class="form-group">

											<div class="form-row">

												<div class="col-sm-12">

													<label for="confirm-password">Confirm Password:</label>

												</div>

											</div>

											<div class="form-row">

												<div class="col-sm-12">

													<input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password" required>

												</div>

											</div>

										</div>

									</div>

									<div class="col-sm-12">

										<div class="form-group">

											<div class="form-row">

												<div class="col-sm-12">

													<label for="confirm-password">Referral:</label>
													<label>(If Any)</label>

												</div>

											</div>

											<div class="form-row">

												<div class="col-sm-12">

													<input type="text" name="referral" class="form-control" placeholder="Referal Code" value="<?php if(isset($_GET['ref'])): echo $_GET['ref']; endif ?>">

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>
						
						<div class="form-row" style="padding-left: 3%; padding-right: 3%;">
						
							<div class="col-sm-12 text-center">
						
								<div class="form-group">
								
									<button type="submit" name="signup-btn" class="btn btn-success">Sign-Up!</button>
								
								</div>
							
							</div>
						
						</div>
						
					</form>
					
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