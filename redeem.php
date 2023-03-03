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
	$phone = $row['phone'];
	$gender = $row['gender'];
  }
}
catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

if (isset($_POST['redeem-btn'])) {
    $redeem = $_POST['redeem'];

    try {
        $SQLQuery = "SELECT * FROM users_tbl WHERE id = :id";
        $statement = $conn->prepare($SQLQuery);
        $statement->execute(array(':id' => $id));

        $user_row = $statement->fetch();

		if ($redeem >= 1000) {
			if ($redeem <= $user_row['points']) {
				$temp_income = $user_row['income'];
				$income = $temp_income + $redeem*0.1;
				
				$update_income_sql = "UPDATE users_tbl SET income = '$income' WHERE id = '$user_row[id]'";
				$update_q = $conn->query($update_income_sql);
				$update_q->setFetchMode(PDO::FETCH_ASSOC);

				$GetPointsSQLQuery = "SELECT * FROM users_tbl WHERE id = :id";
				$statement = $conn->prepare($GetPointsSQLQuery);
				$statement->execute(array(':id' => $id));

				$user_points_row = $statement->fetch();
				$points = $user_points_row['points']-$redeem;

				$update_points_sql = "UPDATE users_tbl SET points = '$points' WHERE id = '$user_row[id]'";
				$update_points_q = $conn->query($update_points_sql);
				$update_points_q->setFetchMode(PDO::FETCH_ASSOC);
	
				echo "<script type= 'text/javascript'>alert('Points Redeemed Successfully!');</script>";
	
				header("location: redeem.php");
			} else {
				echo "<script type= 'text/javascript'>alert('Please enter less than or equal amount of points that you have.');</script>";
			}
		} else {
			echo "<script type= 'text/javascript'>alert('Sorry, minimum 1000 Points required to redeem.');</script>";
		}
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
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
        .card-size {
            margin: 0 250px;
        }

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
                    		
                    	</div>
                
                	</div>

            	</div>
				
			</div>
			<div class="col-sm-9 text-alignment">
				
				<div class="row">

					<!-- <div class="col-sm-2"></div> -->
					
					<div class="col-sm-12">
                        						
						<div class="card mt-2 mb-2">

							<div class="card-size">
                                <div class="card-body">
                                    
                                    <div class="row mb-2">
                                        
                                        <div class="col-sm-12 text-center">
                                        <h2>Redeem</h2>
										
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								
                                        <div class="form-group">
                                            
                                            <input type="number" class="form-control" placeholder="Enter points to redeem" name="redeem" required>

                                            <button type="submit" name="redeem-btn" class="btn btn-block btn-primary mt-2">Redeem</button>

                                            <p class="mt-2 small">Minimum 1000 Points required to redeem</p>
                                            
                                        </div>
                                        
                                    </form>
										
									</div>
									
								</div>

						    </div>	
                            </div>
						</div>
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