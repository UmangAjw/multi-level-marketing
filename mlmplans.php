<?php

require_once "data_source/session.php";

?>

<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>MLM Plans</title>

<style>


	.body{
		color:#708090 ;

	}

	.account-wall
	{
		background-color: #DCDCDC;
    	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}


 .card {
	display: flex; 
    width: 600px;
    height: 400px;
    perspective: 800px;
    margin-top: 30px;
	border : none;
}

 .card .card-content {
    width: 100%;
    height: 100%;
	display: flex;
    text-align: center;
    transition: transform 0.6s;
	
    transform-style: preserve-3d;
    box-shadow: 0px 0px 20px 10px #acacac;	
}

 .card:hover .card-content {
    transform: rotateY(180deg);
}

 .card .card-content .front-side,  .card .card-content .back-side {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    font-size: 20px;
}

 .card .card-content .front-side {
    display: flex;
	align-content: center;
    justify-content: center;
    align-items: center;
	background-color: #eee;
	
}

 .card .card-content .back-side {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #fff;
    color: #000;
	padding: 0 85px;
    transform: rotateY(180deg);
}

 .card .card-content .card-img {
    width: 250px;
    height: 250px;
}

.center {
	display: block;
	margin-left:auto;
	margin-right: auto;
	width: 40%; 
	/* display: flex;
	align-items: center;
	text-align: center;
	justify-content: center;
	flex-direction: row;
	width: 100%; */
}

.btn-success {
	background-color: #333;
}


</style>

</head>

<body>

<div class="row">
		

<div class="container-fluid">
	
<?php
	include("header.php");
?>

<div class="row">

	<div class="col-sm-12">
		<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%; border-bottom:3px solid #333">
			MLM PLANS
		</h3>
	</div>

	<div class="center">
		<div class="col-sm-3" class="text-center">
			<div class="card" class="col-sm-3">
				<div class="card-content">
					<div class="front-side">
						<div class="body">
							<h1>Custom Plan</h1>
						</div>
					</div>
					<div class="back-side">
					<p> This plan is also recognized as marix plan having fixed width(rows). 
						 Here there is no limitation in depth(column), so the upline has to drive more sales from the downline.</br></br>

						<!-- It enables you to set the bonus level as per the MLM business ccompensation plans to entice more customers 
						for purchases and diversify the network chain for more profitability. -->
					
						<?php 
							if(!isset($_SESSION['fname'])) {
								// header("location: logout.php");
							}
							
							else {
								echo '<a href="custom-plan.php"><button type="submit" class="btn btn-success">BUY NOW</button></a>';
							}
						?>
					</p>
					</div>
				</div>
			</div> <!-- End of col-3 -->
		</div> <!-- End of col-6 -->

		<!-- <div class="col-sm-3" class="text-center">
			<div class="card" class="col-sm-3">
				<div class="card-content">
					<div class="front-side">
						<div class="body">
							<h1>Binary Plan</h1>
						</div>
					</div>
					<div class="back-side">
					<p>MLM Binary plan is a plan structure which is used in Multi Level Marketing, that
	                   is very simple and popular among MLM Plans.</br>
					<a href=""><button type="submit" class="btn btn-success">Read More...</button></a>
					</p>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div> End of row -->

<!-- <div class="row">
	<div class="center">
		<div class="col-sm-3" class="text-center">
			<div class="card" class="col-sm-3">
				<div class="card-content">
					<div class="front-side">
						<div class="body">
							<h1>Matrix Plan</h1>
						</div>
					</div>
					<div class="back-side">
					<p>Matrix Plan is a pyramid structure arranged into a fixed number of width(row) and
	depth(column) that restricts the number of distributors you can sponsor on your
	first level.</br>
					<a href=""><button type="submit" class="btn btn-success">Read More...</button></a>
					</p>
					</div>
				</div>
			</div> 
		</div> <!-- End of col-6 -->
<!-- 
		<div class="col-sm-3" class="text-center">
			<div class="card" class="col-sm-3">
				<div class="card-content">
					<div class="front-side">
						<div class="body">
							<h1>Generation Plan(Network Plan)</h1>
						</div>
					</div>
					<div class="back-side">
					<p>In MLM Industry, Generation Plan or Network Plan is considered as one of the
	most important and fruitful full plans.</br>
					<a href=""><button type="submit" class="btn btn-success">Read More...</button></a>
					</p>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>  -->

</div>

	<!-- <h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>1) Unary Plan</b></h5> -->

<!-- <p class="card-text">It is the most basic MLM plan. 
It qualifies you to affiliate new candidates directly into the first line,
i.e., you have direct control over the distributors.
It enables you to recruit unlimited members to the front row and elongate the width.
The multi-level marketing companies make this plan more fascinating by introducing rewards, incentives, 
or bonus after reaching a specific level of frontline depth. 
The distributors can draw striking results using this MLM plan.
Recruiting a large number of members to the downline allows the distributor to earn impressive returns and profits. 
</p> -->

<!-- <h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>2) Binary Plan</b></h5> -->
<!-- <img src="backgrounds/binary.png"  width="60%" style="margin-top: 2%; margin-bottom: 2%;"> -->
<!-- <p class="card-text">(Diagram For Binary Plan</p>

<p class="card-text">MLM Binary plan is a plan structure which is used in Multi Level Marketing, that
is very simple and popular among MLM Plans.
In this plan, each joiner/member is positioned in the binary tree structure.
The right subtree and left subtree concept is the members downline connections.
Each member will have both trees.
This plan is being very popular because of its simplicity.
</p> -->

<!-- <h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>3) Matrix Plan</b></h5> -->
<!-- <img src="backgrounds/matrix.jpg"  width="60%" style="margin-top: 2%; margin-bottom: 2%;">
<p class="card-text">(Diagram For Matrix Plan</p>

<p class="card-text">Matrix Plan is a pyramid structure arranged into a fixed number of width(row) and
depth(column) that restricts the number of distributors you can sponsor on your
first level. It is represented by the formula “ width * depth”.
Matrix Plan is also known as Forced Matrix MLM Plan or Ladder Plan. Matrix
Plan limits the width and motivates to hire more members in the downline.

</p> -->


<!-- <h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>4) Generation Plan(Network Plan)</b></h5>
<img src="backgrounds/generation.jpg"  width="60%" style="margin-top: 2%; margin-bottom: 2%;">		
<p class="card-text">(Diagram For Generation Plan(Network Plan))</p>

<p class="card-text">In MLM Industry, Generation Plan or Network Plan is considered as one of the
most important and fruitful full plans.
Due to its attribute to run until unlimited depth, this plan is highly preferred by
those dreaming about making good money from MLM.
Offers great advantage to both freshers as well as experienced people.
Highly beneficial plan for MLM companies. Big profit at long time.
</p> -->

<!-- 
</div></center>	

<center><div class="col-sm-6">
<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>Strategies in MLM:</b></h3>
<h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>Product Evaluation</b></h5>
<p class="card-text">To understand need & and urgency of product
Identify the uniqueness of envisioned product
Recurring revenue.</p>


</div></center>	

<center><div class="col-sm-6">
<h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>Competence Evaluation</b></h5>
<p class="card-text">To analyse yourself that we are capable of running
MLM company or not
Combination of action man, idea man and people man
makes a good leader.
Good leader maintains respect to uplink and
influences, motivates downlink to do work.</p>


</div></center>	

<center><div class="col-sm-6">
<h5 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><b>Performance Evaluation</b></h5>
<p class="card-text"></p>


</div></center>	 -->


<!-- </div> -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>    