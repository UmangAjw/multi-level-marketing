<?php

require_once "data_source/session.php";
require_once "data_source/database_connection.php";

$email = $_SESSION['email'];

try {
  $SQLQuery = "SELECT * FROM users_tbl WHERE email = :email";
  $statement = $conn->prepare($SQLQuery);
  $statement->execute(array(':email' => $email));

  while($row = $statement->fetch()) {
	$id = $row['id'];
	$points = $row['points'];
	$income = $row['income'];
	// $e_token = $row['e_token'];
	// $_SESSION['e_token'] = $e_token;
  }
}
catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
    	
    	<span class="navbar-toggler-icon"></span>
  		
  		</button>
  		
  		<div class="collapse navbar-collapse" id="navbarContent">
  			
  			<ul class="navbar-nav ml-auto">
  				
			  	<!-- <li class="nav-item mr-3">
				  	<a  class="nav-link" href="ProductsList.php">

						  Token <?php echo $e_token; ?>

					</a>

  				</li> -->

				<li class="nav-item mr-4 m-2">
						  
						Points <b><?php echo $points; ?></b>
  					
  				</li>

				<li class="nav-item mr-4 m-2">
						  
						Income <b><?php echo $income; ?></b>
  					
  				</li>

  				<li class="nav-item mr-3">
  					
  					<a  class="nav-link" href="dashboard.php">
						  
						  Profile
						  <img src="open-iconic-master/png/person-2x.png" class="mr-2">

  					</a>
  					
  				</li>

  				<!-- <li class="nav-item mr-3">
  					
  					<a  class="nav-link" href="index.php">
  							
  						Home
						  <img src="open-iconic-master/png/home-2x.png" class="mr-2">  
						  
  					</a>
  					
  				</li>
  				 -->
  				<li class="nav-item">

				  <a class="nav-link" href="logout.php">

					Sign-Out
					<img src="open-iconic-master/png/account-logout-2x.png" class="mr-2">	

				  </a>
           
  				</li>
  				
  			</ul>
  			
  		</div>
		
	</nav>