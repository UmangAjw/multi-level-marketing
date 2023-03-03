<?php
require_once "data_source/session.php";
require_once "data_source/database_connection.php";

$email = $_SESSION['email'];
//$password = $_POST['password'];

try {
  $SQLQuery = "SELECT * FROM users_tbl WHERE email = :email";
  $statement = $conn->prepare($SQLQuery);
  $statement->execute(array(':email' => $email));

  while($row = $statement->fetch()) {
	$id = $row['id'];
	//$hashed_password = $row['password'];
	$email = $row['email'];
	$f_name = $row['f_name'];
	$l_name = $row['l_name'];
	$phone = $row['phone'];
	$gender = $row['gender'];
  }
}
catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>MLM Customer Profile</title>

	<style type="text/css">

        @media (min-width: 768px)
		{
    		.bootstrap-vertical-nav .collapse
			{
        		display: block;
    		}
			.togglepriyank
			{
				display: none;
			}
		}

		.center {
	display: block;
	margin-left:auto;
	margin-right: auto;
	width: 40%; 
	
}
	</style>

</head>

<body>

	
	<div class="container-fluid">
	<?php
        include("header.php");
		include("navbar_login.php");
	?>
	
		<div class="row">
			
			<div class="col-sm-3">
				
				<div class="bootstrap-vertical-nav">

                	<center>
                   
                   		<button class="btn btn-block togglepriyank mt-1 mb-2" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    
                    		<img src="open-iconic-master/svg/arrow-circle-left.svg" class="mr-2">
                    		
                    		Navigation
                
                		</button>
                	
                	</center>

                	<div class="collapse navbar-collapse mt-1 mb-1" id="collapseExample">
                    
                    	<div class="row">
                    		
                    		<div class="col-sm-12">
                    			
                    			<div class="list-group list-group-flush">
									
									<a href="index.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/home-2x.png" class="mr-1">
											
											Home
											
										</span>
										
									</a>
									
									<a href="user-hierarchy.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
									
										<span>
										
											<img src="open-iconic-master/png/people-2x.png" class="mr-1">
											
											User Level
											
										</span>
											
									</a>

									<a href="purchase-history.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
									
										<span>
										
											<img src="open-iconic-master/png/inbox-2x.png" class="mr-1">
											
											Purchase History
											
										</span>
											
									</a>

									<a href="redeem.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/transfer-2x.png" class="mr-1">
											
											Redeem
												
										</span>
											
									</a>
									
									<a href="income.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/book-2x.png" class="mr-1">
												
											View Income
												
										</span>
											
									</a>
										
									<a href="ProductsList.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/cart-2x.png" class="mr-1">
											
											Show Products
												
										</span>
											
									</a>
									<a href="addProduct.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/circle-check-2x.png" class="mr-1">
											
											Add a product
												
										</span>
											
									</a>
									<a href="feedback.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/globe-2x.png" class="mr-1">
											
											Why Choose Us?
												
										</span>
											
									</a>
									
								
                   				</div>
                    			
							</div>
                    		
                    	</div>
                
                	</div>

            	</div>
				
			</div>
			<div class="col-sm-9 text-alignment" >
				
				<div class="row">

					<!-- <div class="col-sm-2"></div> -->
					
					<div class="col-sm-12">
						
						<div class="card mt-2 mb-2">
						
							<center>
							
							<img class="img-fluid card-img-top mt-2" src="logos/student-signup_logo.png" style="border-radius: 50%; width: 15%;">
							
							</center>
							<div class="center">
							
							<div class="card-body">
								
								<div class="row mb-2">
									
									<div class="col-sm-12 text-center">
										
										<b>
										
											Name: <?php echo $f_name." ".$l_name;?>
										
										</b>
										
									</div>
									
									
								</div></br>
								
								<div class="row mb-2">
									
									<div class="col-sm-12 text-center">
										
										<b>
										
											Phone: <?php echo $phone;?>
											
										</b>
										
									</div>
									
									
								</div></br>
								
								<div class="row mb-2">
									
									<div class="col-sm-12 text-center">
										
										<b>
										
											E-mail: <?php echo $email;?>
										
										</b>
										
									</div>
									
									
								</div></br>

								
								<div class="row mb-2">
									
									<div class="col-sm-12 text-center">
										
										<b>
										
											Gender: <?php echo $gender;?>
										
										</b>
										
									</div>
									
								</div></br>

								<div class="row mb-2">
									
									<div class="col-sm-12 text-center">
										
										<b>
										
											Share Link: <?php echo "<a target=_blank href='http://localhost/MLM/customer-signup.php?ref=".$_SESSION['random_id']."'>http://localhost/MLM/customer-signup.php?ref=".$_SESSION['random_id']."</a>" ?>
										
										</b>
										
									</div>
									
								</div>

								</div>	
								<!-- <?php if($student['dateofbirth']==0000-00-00 && $student['address_line_1']==-1 && $student['address_line_2']==-1 && $student['city']==-1 && $student['state']==-1) { ?>

								<div class="row">

									<div class="col-sm-12">

										<div class="card mt-2">

											<div class="card-header">
												
												<a href="#collapseCompleteProfile" data-toggle="collapse">

													<center>

														<b>Complete your profile</b>

													</center>

												</a>

											</div>

											<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

												<div class="collapse" id="collapseCompleteProfile">

													<div class="card-body">
														
														<div class="form-group">
															
															<label for="student-birthdate">

																Select your birthdate:

															</label>
															
															<input name="student-birthdate" type="date" class="form-control" required>
															
														</div>
														
														<div class="form-group">
															
															<label for="address-group">

																Enter your address:

															</label>
															
															<div class="address-group">
																
																<input type="text" name="student-address_line_1" class="form-control" placeholder="Home/Block/Flat" required>
																
																<input type="text" name="student-address_line_2" class="form-control mt-2" placeholder="Street/Lane/Area" required>
																
																<div class="form-row mt-2">
																
																	<div class="col-sm-6">
																
																		<select class="form-control" name="student-state" id="student-state-select" onChange="manipulateCities()" required>

																			<option selected disabled>State</option>
																			
																			<option value="Gujarat">Gujarat</option>

																		</select>
																		
																		<script type="text/javascript">
																		
																			function manipulateCities()
																			{
																				var state_select = document.getElementById("student-state-select");
																			
																				var selected_state = state_select.options[state_select.selectedIndex].text;
																				
																				var city_select = document.getElementById('student-city-select');
																				
																				var gujarat_cities = new Array(
																					"Ahmedabad",
																					"Amreli",
																					"Anand",
																					"Bharuch",
																					"Bhavnagar",
																					"Dahod",
																					"Dwarka",
																					"Gandhinagar",
																					"Somnath",
																					"Jamnagar",
																					"Junagadh",
																					"Kachchh",
																					"Nadiad",
																					"Mehsana",
																					"Morbi",
																					"Navsari",
																					"Patan",
																					"Porbandar",
																					"Rajkot",
																					"Surat",
																					"Vadodara",
																					"Valsad");    
																					
																				if(selected_state=="Gujarat")
																				{
																					
																					for(var i=0;i<gujarat_cities.length;i++)
																					{
																						var option_city = gujarat_cities[i];
																						
																						var option_add = document.createElement("option");
																						
																						option_add.textContent = option_city;
																						
																						option_add.value = option_city;
																						
																						city_select.appendChild(option_add);
																					}
																				}
																				
																			}
																		
																		</script>
																	
																	</div>
																	
																	<div class="col-sm-6"> -->
																		
																		<!-- <select class="form-control" name="student-city" id="student-city-select" required>

																			<option selected disabled>City</option>

																		</select>
																		
																	</div>
																
																</div>
																
															</div>
															
														</div>

													</div>

													<div class="card-footer">

														<center>
														
															<button type="submit" class="btn btn-primary">Submit</button>
															
														</center>

													</div>

												</div>

											</form>

										</div>

									</div>

								</div> -->

								</div> -->

								<!-- <?php } else { ?> -->

								<!-- <div class="row mb-2">

									<div class="col-sm-5">
										
										<b>
											
											<center>Date of birth:</center>

										</b>

									</div>

									<div class="col-sm-7">
										
										<i>
											
											<center><?php echo $student['dateofbirth']; ?></center>

										</i>

									</div>

								</div>

								<div class="row mb-2">

									<div class="col-sm-5 text-center">
										
										<b>
											
											Address:

										</b>

									</div>

									<div class="col-sm-7 text-center">
										
										<i>
											
											<?php echo $student['address_line_1'].","; ?>

										</i>

									</div>

								</div>

								<div class="row mb-2">

									<div class="col-sm-5 text-center">

									</div>

									<div class="col-sm-7 text-center">
										
										<i>
											
											<?php echo $student['address_line_2'].","; ?>

										</i>

									</div>

								</div>

								<div class="row mb-2">

									<div class="col-sm-5 text-center">

									</div>

									<div class="col-sm-7 text-center">
										
										<i>
											
											<?php echo $student['city'].","; ?>

										</i>

									</div>

								</div>

								<div class="row mb-2">

									<div class="col-sm-5 text-center">

									</div>

									<div class="col-sm-7 text-center">
										
										<i>
											
											<?php echo $student['state']."."; ?>

										</i>

									</div>

								</div>
								
							</div>

							<?php } ?>

							<div class="card-footer">

								<center>

									<a href="#collapseEdit" data-toggle="collapse"><b>Edit Profile</b></a>

								</center>

								<div id="collapseEdit" class="collapse">
								
									<div class="card mt-3">

										<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

										<div class="card-body">

											<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
						
												<div class="form-row">
													
													<div class="col-sm-12">
														
														<label for="name">Enter your name:</label>
														
													</div>
													
												</div>
												
												<div class="form-row" id="name">
													
													<div class="col-sm-4">
														
														<input type="text" name="update-first-name" class="form-control" value="<?php echo $student['firstname']; ?>" required>
														
													</div>
													
													<div class="col-sm-4">
														
														<input type="text" name="update-middle-name" class="form-control" value="<?php echo $student['middlename']; ?>" required>
														
													</div>
													
													<div class="col-sm-4">
														
														<input type="text" name="update-last-name" class="form-control" value="<?php echo $student['lastname']; ?>" required>
														
													</div>
													
												</div>
	
											</div>

											<div class="form-group" style="padding-left: 3%; padding-right: 3%;">

												<div class="form-row">

													<div class="col-sm-12">

														<label>Enter your phone number:</label>

													</div>

												</div>

												<div class="form-row">

													<div class="col-sm-12">

														<input type="text" name="update-phone-number" class="form-control" value="<?php echo $student['phonenumber']; ?>" required>

													</div>

												</div>

											</div>

											<div class="form-group" style="padding-left: 3%; padding-right: 3%;">

												<div class="form-row">

													<div class="col-sm-12">

														<label>Enter your email:</label>

													</div>

												</div>

												<div class="form-row">

													<div class="col-sm-12">

														<input type="text" name="update-email" class="form-control" value="<?php echo $student['email']; ?>" required>

													</div>

												</div>

											</div>

											<?php if($student['dateofbirth']!=0000-00-00 && $student['address_line_1']!=-1 && $student['address_line_2']!=-1 && $student['city']!=-1 && $student['state']!=-1) { ?>

											<div class="form-group" style="padding-left: 3%; padding-right: 3%;">

												<div class="form-row">

													<div class="col-sm-12">

														<label>Select your birthdate:</label>

													</div>

												</div>

												<div class="form-row">

													<div class="col-sm-12">

														<input name="student-birthdate" type="date" class="form-control" value="<?php echo $student['dateofbirth'] ?>" required>

													</div>

												</div>

											</div>

											<div class="form-group" style="padding-left: 3%; padding-right: 3%;">

												<div class="form-row">

													<div class="col-sm-12">

														<label>Enter your address:</label>

													</div>

												</div>

												<div class="form-row">

													<div class="col-sm-12">

														<input type="text" name="student-address_line_1" class="form-control" placeholder="Home/Block/Flat" value= "<?php echo $student['address_line_1']; ?>" required>

													</div>

												</div>

												<div class="form-row">

													<div class="col-sm-12">

														<input type="text" name="student-address_line_2" class="form-control mt-2" placeholder="Street/Lane/Area" value= "<?php echo $student['address_line_2']; ?>" required>

													</div>

												</div>

												<div class="form-row mt-2">

													<div class="col-sm-6">

														<select class="form-control" name="student-state" id="student-state-select" onChange="manipulateCities()" required>

															<?php 					
															
																if($student['state']=="Gujarat")
																{
																	echo "<option value='Gujarat' selected>Gujarat</option>";
																}
															?>

														</select>	

													</div>

													<div class="col-sm-6">

														<select class="form-control" name="student-city" id="student-city-select" required>

															<?php

																if($student['state']=="Gujarat")
																{
																	echo "<option value='".$student['city']."' selected>".$student['city']."</option>";

																	$gujarat = array("Ahmedabad","Amreli","Anand","Bharuch","Bhavnagar","Dahod","Dwarka","Gandhinagar","Somnath","Jamnagar","Junagadh","Kachchh","Nadiad","Mehsana","Morbi","Navsari","Patan","Porbandar","Rajkot","Surat","Vadodara","Valsad");

																	foreach ($gujarat as $city)
																	{
																		if($city==$student['city'])
																		{
																			continue;
																		}
																		else
																		{
																			echo "<option value='".$city."'>".$city."</option>";
																		}
																	}
																}

															?>

														</select>

													</div>

												</div>

											</div>

											<?php } ?>

										</div>

										<div class="card-footer">

											<center>

												<button class="btn btn-success" type="submit">Edit</button>

											</center>

										</div>

										</form>

									</div>

								</div>

							</div>
							
						</div>

						<!--<div class="card">

							<div class="card-header">

								<?php if($student['dateofbirth']==0000-00-00 && $student['address_line_1']==-1 && $student['address_line_2']==-1 && $student['city']==-1 && $student['state']==-1) { ?>

								<h5>Complete Your Profile</h5>

								<?php } else { ?>

								<h5>Addition Details</h5>

								<?php } ?>

							</div>-->

								<!--<div class="card-footer">

									<a href="#collapseAdditionalUpdate" data-toggle="collapse"><center><B>Edit Additional Information</B></center></a>

									<div class="collapse mt-3" id="collapseAdditionalUpdate">

										<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									
											<div class="form-group">
												
												<label for="student-birthdate">Select your birthdate:</label>
												
												<input name="student-birthdate" type="date" class="form-control" value="<?php echo $student['dateofbirth']; ?>" required>
												
											</div>
											
											<div class="form-group">
												
												<label for="address-group">Enter your address:</label>
												
												<div class="address-group">
													
													<input type="text" name="student-address_line_1" class="form-control" value="<?php echo $student['address_line_1']; ?>" required>
													
													<input type="text" name="student-address_line_2" class="form-control mt-2" value="<?php echo $student['address_line_2'] ?>" required>
													
													<div class="form-row mt-2">
													
														<div class="col-sm-6">
													
															<select class="form-control" name="student-state" id="student-state-select" onChange="manipulateCities()" required>

																<option selected disabled>State</option>
																
																<option value="Gujarat">Gujarat</option>

															</select>
															
															<script type="text/javascript">
															
																function manipulateCities()
																{
																	var state_select = document.getElementById("student-state-select");
																
																	var selected_state = state_select.options[state_select.selectedIndex].text;
																	
																	var city_select = document.getElementById('student-city-select');
																	
																	var gujarat_cities = new Array("Ahmedabad",
																									"Amreli",
																									"Anand",
																									"Bharuch",
																									"Bhavnagar",
																									"Dahod",
																									"Dwarka",
																									"Gandhinagar",
																									"Somnath",
																									"Jamnagar",
																									"Junagadh",
																									"Kachchh",
																									"Nadiad",
																									"Mehsana",
																									"Morbi",
																									"Navsari",
																									"Patan",
																									"Porbandar",
																									"Rajkot",
																									"Surat",
																									"Vadodara",
																									"Valsad");    
																		
																	if(selected_state=="Gujarat")
																	{
																		
																		for(var i=0;i<gujarat_cities.length;i++)
																		{
																			var option_city = gujarat_cities[i];
																			
																			var option_add = document.createElement("option");
																			
																			option_add.textContent = option_city;
																			
																			option_add.value = option_city;
																			
																			city_select.appendChild(option_add);
																		}
																	}
																	
																}
															
															</script>
														
														</div>
														
														<div class="col-sm-6">
															
															<select class="form-control" name="student-city" id="student-city-select" required>

																<option selected disabled>City</option>

															</select>
															
														</div>
													
													</div>
													
												</div>
												
											</div>
											
											<center>
											
												<button type="submit" class="btn btn-success">Edit</button>
												
											</center>
											
										</form>

									</div>

								</div>

						</div>-->
						
					</div>

					<div class="col-sm-2"></div>
					
				</div>
				
			</div>
			
		</div>
	
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>