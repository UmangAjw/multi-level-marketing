<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>MLM System</title>

<style>

	.login_logos
	{
		height: auto;
		width: 30%;
		padding-top: 2%;
		padding-bottom: 2%;
	}
	.benefits_logos
	{
		height: auto;
		width: 30%;
		padding-top: 3%;
		padding-bottom: 2%;
	}
	.how_card
	{
		margin-bottom: 2%;
	}
	.login_card
	{
		background-size: 200%; 
		background-repeat: no-repeat; 
		background-position: center;
		margin-bottom: 2%;
		color: white;
	}
	.benefits_card
	{
		background-size: 150%; 
		background-repeat: no-repeat; 
		background-position: center;
		margin-bottom: 2%;
		color: white;
	}
	.card-text-how-why
	{
		padding-bottom: 2%;
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

			<!-- <div class="row" style="background-color: #ccd1d0;">
				
				<div class="col-sm-12 text-center">
					
					<h3 style="padding: 1%;">Select Login Type</h3>
					
				</div>
				
			</div> -->

			<div class="row" style="background-color: #ccd1d0; padding-top: 1%;">
			  
			  <div class="col-sm-4 text-center">
				
		  		<div class="card login_card" style="background-image: url(backgrounds/student_login-card_background.jpg.);">
			  		
			  		<center><img class="card-img-top img-fluid login_logos" src="logos/student_logo.png"></center>
				  		
				  	<div class="card-block">
							
						<h3 class="card-title">Customer/User</h3>
							
						<p class="card-text">User must login here!</p>
							
						<a href="customer-login.php"><button class="btn btn-primary" style="margin-bottom: 2%;">Create Account</button></a>
				  
				  </div>
				
				</div>
			  
			  </div>
			  
			  <!-- <div class="col-sm-3 text-center">
				
		  		<div class="card login_card" style="background-image: url(backgrounds/tpo_login-card_background.jpg);">
			  		
			  		<center><img class="card-img-top img-fluid login_logos" src="logos/tpo_logo.png"></center>
				  		
				  	<div class="card-block">
							
						<h3 class="card-title">Admin</h3>
							
						<p class="card-text">Only Admin Can Login Here!</p>
							
						<a href="admin-login.php"><button class="btn btn-primary" style="margin-bottom: 2%;">Admin Login</button></a>
				  
				  </div>
				
				</div>
			  
			  </div>
			 -->
			  
			  <div class="col-sm-4 text-center">
				
		  		<div class="card login_card" style="margin-bottom: 4%; background-image: url(backgrounds/admin_login-card_background.jpg);">
			  		
			  		<center><img class="card-img-top img-fluid login_logos" src="logos/admin_logo.png"></center>
				  		
				  	<div class="card-block">
							
						<h3 class="card-title">Why MLM?</h3>
							
						<p class="card-text">Know More About MLM!</p>
							
						<a href="mlminfo.php"><button class="btn btn-primary"  style="margin-bottom: 2%;">Show Details</button></a>
				  
				  	</div>
				
				</div>
			  
			</div>
				  
			  <!-- <div class="col-sm-4 text-center">
				
		  		<div class="card login_card" style="background-image: url(backgrounds/benefits_nopaperwork_background.jpg);">
			  		
			  		<center><img class="card-img-top img-fluid login_logos" src="logos/student_logo.png"></center>
				  		
				  	<div class="card-block">
							
						<h3 class="card-title">MLM Plans</h3>
							
						<p class="card-text">Details About Plans!</p>
							
						<a href="mlmplans.php"><button class="btn btn-primary" style="margin-bottom: 2%;">Show Plans</button></a>
				  
				  </div>
				
				</div>
			  
			  </div> -->

			  <div class="col-sm-4 text-center">
				
				<div class="card login_card" style="background-image: url(backgrounds/benefits_nopaperwork_background.jpg);">
					
					<center><img class="card-img-top img-fluid login_logos" src="logos/student_logo.png"></center>
						
					<div class="card-block">
						  
					  <h3 class="card-title">Products</h3>
						  
					  <p class="card-text">Details About Products!</p>
						  
					  <a href="ProductsList.php"><button class="btn btn-primary" style="margin-bottom: 2%;">Show Products</button></a>
				
				</div>
			  
			  </div>
			
			</div>


			</div>

		</div>

	</div>
	
	<div class="row">
	
		<div class="col-sm-12">

			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<h3 style="padding: 1%;">How it works?</h3>
					
				</div>
				
			</div>
	
			<div class="row">

				<div class="col-sm-4">

					<div class="card text-center how_card">

						<center><img class="img-fluid card-img-top login_logos" src="logos/student_how-card_logo.png"></center>
						
						<div class="card-block">
							
							<h3 class="card-title">Customer/User</h3>
							
							<p class="card-text card-text-how-why">Customer/User work in this manner!</p>
							
						</div>

					</div>

				</div>

				<div class="col-sm-4">
					
					<div class="card text-center how_card">

						<center><img class="img-fluid card-img-top login_logos" src="logos/tpo_how-card_logo.png"></center>
						
						<div class="card-block">
							
							<h3 class="card-title">Admin</h3>
							
							<p class="card-text card-text-how-why">Admin work in this manner!</p>
							
						</div>

					</div>
					
				</div>

				<div class="col-sm-4">
					
					<div class="card text-center how_card" style="margin-bottom: 4%;">

						<center><img class="img-fluid card-img-top login_logos" src="logos/company_how-card_logo.png"></center>
						
						<div class="card-block">
							
							<h3 class="card-title pl-2 pr-2">Company</h3>
							
							<p class="card-text card-text-how-why">Multi Level Marketing (MLM) is a business model or marketing strategy in which the distributors' income includes their own sales, and a percentage of the sales group they recruit, which is commonly known as their 'downline'. Customers can also sign up as a distributor to sell the company's product.</p>
							
						</div>

					</div>
					
				</div>

			</div>
		
		</div>
			
	</div>
	
	<div class="row">
		
		<div class="col-sm-12" style="background-color: orange;">
			
			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<h3 style="padding: 1%;">Why choose this system?</h3>
					
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<div class="row">
						
						<div class="col-sm-3">
							
							<div class="card text-center benefits_card" style="background-image: url(backgrounds/benefits_nopaperwork_background.jpg);">
								
								<center><img class="img-fluid benefits_logos" src="logos/nopaperwork_why-card-logo.png"></center>
								
								<div class="card-block">
									
									<h3 class="card-title">No Paperwork</h3>
									
									<p class="card-text card-text-how-why">It does not require paperwork!</p>
									
								</div> 
								
							</div>
							
						</div>
						
						<div class="col-sm-3">
							
							<div class="card text-center benefits_card" style="background-image: url(backgrounds/benefits_efficientdatabase_background.jpg)">
								
								<center><img class="img-fluid benefits_logos" src="logos/efficientdatabase_why-card_logo.png"></center>
								
								<div class="card-block">
									
									<h3 class="card-title">Efficient Database</h3>
									
									<p class="card-text card-text-how-why">It has an efficient database!</p>
									
								</div> 
								
							</div>
							
						</div>
						
						<div class="col-sm-3">
							
							<div class="card text-center benefits_card" style="background-image: url(backgrounds/benefits_fasteranalysis_background.jpg)">
								
								<center><img class="img-fluid benefits_logos" src="logos/fasteranalysis_why-card_logo.png"></center>
								
								<div class="card-block">
									
									<h3 class="card-title">Faster Analysis</h3>
									
									<p class="card-text card-text-how-why">It provides faster analysis!</p>
									
								</div> 
								
							</div>
							
						</div>
						
						<div class="col-sm-3">
							
							<div class="card text-center benefits_card" style="margin-bottom: 4%; background-image: url(backgrounds/benefits_quicksearching_background.jpg)">
								
								<center><img class="img-fluid benefits_logos" src="logos/quicksearching_why-card_logo.png"></center>
								
								<div class="card-block">
									
									<h3 class="card-title">Quick Searching</h3>
									
									<p class="card-text card-text-how-why">It enables quick searching!</p>
									
								</div> 
								
							</div>
							
						</div>
						
					</div>
					
				</div>	

			</div>
			
		</div>
		
	</div>
		
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>