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
        .card {
            display: flex; 
            width: 500px;
            height: 350px;
            perspective: 800px;
            margin-top: 30px;
            border : none;
        }
        .box{
            transition: box-shadow .3s;
            margin:10px; 
            padding: 10px;
            border-radius: 5px;
        }
        .box:hover {
        box-shadow: 0 0 11px rgba(33,33,33,.2); 
        }
	</style>

</head>

<body>
	<?php
        include("header.php");
		include("navbar_login.php");
	?>
	<div class="container-fluid">
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

			<div class="col-sm-9">
				<div class="row">
					<?php 
						$sql = 'SELECT * FROM product';
						$q = $conn->query($sql);
						$q->setFetchMode(PDO::FETCH_ASSOC);
						while ($row = $q->fetch())
						{
								$name=$row['pname'];
								$pid=$row['p_id'];
								$price=$row['p_price'];
					?>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="box">
							<a href="<?php echo "product.php?id=".$pid; ?>">
							<img src="logos/cart.png" class="rounded" alt= "no products" width="100%" height="auto"></a>
							<br>
							<br>
							<h6 class="card-title text-style"><label style="text-decoration:none; color:black;"> <?php echo $name ?> </label> </h6>
							<!-- <p class="card-title text-style"> ID   :<label style="text-decoration:none; color:black;"> <?php echo $pid ?> </label> </p> -->
							<p class="card-title text-style"><label style="text-decoration: none; color:black;"> <?php echo "Rs. ".$price ?> </label> </p></br>
						</div>
					</div>
					<?php 
						}
					?>
				</div>
			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>