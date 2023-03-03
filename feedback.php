<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/style.css">

<title>Feedback</title>

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

		// include("database_connection.php");

		// $current_year = date("Y");

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

					include("feedback-header.php");
		
					include("navbar_login.php");
				
				?>
			
			</div>

        </div>
        
    </div>
    
    <div class="container" style="background-color: #dee2e6; border-radius: 20px; margin-top: 20px">
    <div style="margin-top:20px">

    <ul style="text-align:left; margin-top:5px">
            <li><b>Best quality MLM tools and software solutions:</b> We have a team of web developers with several years of experience and therefore the MLM tools and software solutions that we offer are user friendly, fully featured and also secured. Besides, the software solutions that we offer, fulfill and leverage all the necessary features to run as well as manage the MLM companies successfully.</li>
            <li><b>Affordable services and solutions:</b> At this company, we only develop the best quality software for those MLM companies, who require the MLM software services and software solutions to successfully obtain their business goals. Though there are a number of companies available, who claim to offer the similar service within affordable rate. But they don’t offer quality services and featured direct salessoftware solution together. This is the place, where we stand apart from the competitors as we offer the best mlm software services and solutions with ongoing support to our clients by the help of the team of expert professionals within affordable rates.</li>
            <li><b>Reliable and secure MLM software and tools:</b>The main goal of the web based mlm software is that it should be secured. Therefore, the experienced team of our company uses the updated technology to build up completely reliable and secured MLM software for the clients, who decide to run an MLM company successfully.</li>
            <li><b>Development and research:</b>We constantly follow latest technologies and also adopt as well as integrate the new technologies of web development to get the best software solution. We mainly work on PHP, MySql, HTML5, CSS3, JS, Bootstrap etc.</li>
            <li><b>Assurance:</b>We offer each of our clients’ complete assurance in all respects regarding the MLM software solutions that we develop, the supporting services and the team of experts as we completely trust that we can only be successful if our clients get success.</li>
            <li><b>Team Effort:</b>Every successful MLM software development requires great team efforts. We are not an exception too. Here we have a team of expert professionals, who successfully coordinate to each other and we are also ready to support our clients always.</li>

    </ul>
    </div>

    </div>
		
		
	
</div>
		

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>