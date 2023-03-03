<?php

require_once "data_source/database_connection.php";
require_once "data_source/session.php";

	if (isset($_POST['buy-now'])) {
		
		$e_token = $_POST["e-token"];
		if($e_token>=10000){
		$id = $_SESSION["id"];
	echo $id." ".$e_token;
	// $data = [
	// 	'e_token' => $e_token,
	// 	'id' => $id,
	// ];

	try {
		$SQLUpdate = "UPDATE users_tbl SET e_token=? WHERE id=?";
		$statement = $conn->prepare($SQLUpdate);
		$statement->execute([$e_token, $id]);

		if($statement->rowCount() == 1) {
			header('location: dashboard.php');
		}
	}
	catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	}
	}

?>

<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>Why and What is MLM?</title>

<style>
	
	.account-wall
	{
		background-color: #DCDCDC;
    	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}

    .btn-success {
	background-color: #333;
    width: 150px;
    height: 50px;
}



</style>

</head>

<body>

<div class="row">
		

<!-- <div class="container-fluid">
	

     <div class="col-sm-12">

            <center><div class="col-sm-6">

				<h1 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>Custom Plan</b></h1>

				<p class="card-text">
                <h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">    
                This plan is also recognized as marix plan having fixed width(rows). 
                Here there is no limitation in depth(column), so the upline has to drive more sales from the downline.
                It enables you to set the bonus level as per the MLM business ccompensation plans to entice more customers 
                for purchases and diversify the network chain for more profitability.</h3>

                 </p></br>

                 <a href=""><button type="submit" class="btn btn-success" >Buy Plan</button></a>
			</div>

             </div>   		


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script> -->

<div class="container-fluid">
	
		<?php
			include("header.php");
		
        ?>
        
        
 <center><div class="row" style="margin-top: 18px"> 
        
            <div class="col-sm-3">
                <img src="logos/noproduct.png" class="rounded" alt= "no products" width ="200px" style="margin-left:20px" >
                <br>
                <h3 class="card-title text-style" style="margin-top:30px;"> Custom Plan </h3>
				<form method="POST">
					<input type="number" name="e-token" id="e_token" placeholder="Enter tokens to buy"><br><br>
					<input type="submit" name="buy-now" value="Buy Now" onclick="check_token()" class="btn btn-success">
				</form>
				<script>
					function check_token() {
						var token = document.getElementById("e_token").value;
						if (token < 10000) {
							alert("You cannot buy token worth less than 10,000");
						}
					}
				</script>
                <!-- <a href=""><button type="submit" class="btn btn-success" >Buy Now</button></a> -->
            </div>
          

        <div class="col-sm-6" style="background-color:#d7d8d8">
						
						<div class="card-block">
							
							<h3 class="card-title">Description</h3>
							
							<p class="card-text card-text-how-why">This plan is also recognized as marix plan having fixed width(rows). 
                Here there is no limitation in depth(column), so the upline has to drive more sales from the downline.
                It enables you to set the bonus level as per the MLM business ccompensation plans to entice more customers 
                for purchases and diversify the network chain for more profitability. </br>1 Token = ₹1</p>
							
						</div>
		</div>                
    </div></center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>   