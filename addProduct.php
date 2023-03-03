<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Add Product</title>
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
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center" style="background-color: #333">
			<h1 style="padding-top: 2%; color: white;">Add Product</h1>
			<h5 style="padding-bottom: 2%; color: white;"></h5> 	
		</div>
	</div>
	<div class="row">

					<div class="col-sm-3">
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
                    	
			<!-- <div class="col-sm-3"></div> -->
			<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-12">
						<div class="account-wall">
							<center><img class="img-fluid" src="logos/box.png" width="15%" style="margin-top: 2%; margin-bottom: 2%;"></center>
							<form method="POST" action="addProduct.php">
								<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									<label for="student-login-verify">Product Name:</label>
									<input type="text" class="form-control" placeholder="Enter Product Name" name="pname" required>
									<!-- <small id="email-help" class="form-text text-muted">We'll never share your data with anyone else.</small> -->
								</div>	
								<div class="form-group" style="padding-left: 3%; padding-right: 3%;">
									<label for="student-login-password">Product Price:</label>
									<input type="number" class="form-control" placeholder="Enter Product Price" name="p_price" required>
									<!-- <small id="password-help" class="form-text text-muted">Your password is secure with us.</small> -->
								</div>
								<div class="form-group"style=" padding-left: 3%; padding-right: 3%;">
									<div class="form-row">
										<div class="col-sm-1"></div>
										<div class="col-sm-1"></div>
										<div class="col-sm-1"></div>
										<div class="col-sm-1"></div>
										<div class="col-sm-4">		
											<button  name="add-product" type="submit" class="btn btn-block btn-primary">Add Product</button>
										</div>
									</div>	
								</div>
								
								<div class="form-group text-center" style="padding-left: 3%; padding-right: 3%; padding-bottom: 2%;">
									<div class="form-row">
										<div class="col-sm-12 text-center">
											<!-- <h6>Not a part of this system yet? <a href="customer-signup.php">Sign up here!</a></h6> -->
										</div>
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

<?php
$conn = mysqli_connect("localhost","root","","db_mlm");
 if(isset($_POST['add-product']))
 {
	$pname = $_POST['pname'];
	$price = $_POST['p_price'];
	
	$product_check_query = "SELECT * FROM `product` WHERE pname = '$pname'";
	$product_check = mysqli_query($conn,$product_check_query);
	
	$product = mysqli_fetch_array($product_check);
	if(isset($product['pname'])){
		echo "
			<script>
				alert('Product Already Exists !');
			</script>
		";
		die();
		// header('location: product.php');
	}
	else{
		$insert_product = "INSERT INTO `product`( `pname`, `p_price`) VALUES ('$pname','$price')";
		$query = mysqli_query($conn,$insert_product);
		echo "
			<script>
				alert('Success!');
			</script>
		";
		// die();
		// header('location: product.php');
	}
 }
?>

</body>
</html>


