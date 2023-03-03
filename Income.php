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
	$f_name = $row['f_name'];
	$l_name = $row['l_name'];
	$random_id = $row['random_id'];
	$points = $row['points'];
  }

//   $SQLQuery1 = "SELECT * FROM user_tbl WHERE random_id = :random_id";
//   $statement1 = $conn->prepare($SQLQuery1);
//   $statement1->execute(array(':random_id' => $random_id));

//   while($row1 = $statement1->fetch()) {
// 	// $id = $row['id'];
//     $Profit = $row1['Profit'];
    
//   }
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
										
											Name: <?php echo $f_name;?>
										
										</b>
										
									</div>
									
									
								</div></br>
                                <?php

                                ?>

								<div class="row mb-2">
									
									<div class="col-sm-12 text-center">
										
										<b>
										
	 										Profit (in points): <?php echo "".$points;?>
											
										</b>
										
									</div>
									
									
								</div></br>

								
							</div>
							
							<?php

								$current_user_sql = "SELECT * from users_tbl WHERE id = '$_SESSION[id]'";
								$current_user_q = $conn->query($current_user_sql);
								$current_user_q->setFetchMode(PDO::FETCH_ASSOC);
								$current_user_row = $current_user_q->fetch();

								$ref_user_sql = "SELECT * from income_history WHERE random_id = '$current_user_row[random_id]'";
								$ref_user_q = $conn->query($ref_user_sql);
								$ref_user_q->setFetchMode(PDO::FETCH_ASSOC);
								// $ref_user_row = $ref_user_q->fetch();

                                // if ($ref_user_row) {
									// print_r('inside if');
									// print_r($ref_user_row);
                                    ?>

							<table class="table">
								<thead>
									<tr>
										<th>Sr.</th>
										<th>Date</th>
										<th>Name</th>
										<th>Profit (in points)</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$count = 1;
										while ($income_row = $ref_user_q->fetch()) {
										// print_r('inside while');
                                    ?>
										<tr>
											<td><?php echo $count++; ?></td>
											<td><?php echo $income_row['date']; ?></td>
											<td><?php echo $income_row['ref_name']; ?></td>
											<td><?php echo $income_row['points']; ?></td>
										</tr>
									<?php
                                    } ?>
								</tbody>
							</table>

							<div class="center my-4">
								<a class="btn btn-success" href="./income-statement.php">Generate Income Report</a>
							</div>
						
						<?php
                        	// }
						?>
				</div>
				
			</div>
			
		</div>
	
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>