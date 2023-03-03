<?php

require_once "data_source/session.php";
require_once "data_source/database_connection.php";

?>

<!doctype html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<title>Customer Sign-Up</title>

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
									
									<a href="income.php" style="text-decoration: none;" class="btn list-group-item list-group-item-action">
										
										<span>
											
											<img src="open-iconic-master/png/book-2x.png" class="mr-1">
												
											View Income
												
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
            <h3 class="text-center col-sm-9" style="padding-top: 1%; padding-bottom: 1%; border-bottom:3px solid #ccc">
                User Hierarchy
            </h3>
	    </div>
		
		<!-- <div class="row" style="margin: 5%">
			
			<div class="col-sm-2">
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Level 1</h3>

            </div>
            
            <div class="col-sm-2">    
                <h5 class="text-center">Aakash</h5>
                <h6 class="text-center">Random Code: </h6>
                <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                <h6 class="text-center">Ref Code: </h6>
            </div>

        </div> -->

        <?php
        try {
            $SQLQuery = "SELECT * FROM user_level_tbl";
            $statement = $conn->prepare($SQLQuery);
            $statement->execute();
        }
        catch (PDOException $e) {
            $error = "<p style='color:red; text-align:center; font-size:15px'>Error fetching data from database</p>";
        }
    ?>

    <div>
        <?php
           try {
                $SQLQuery = "SELECT * FROM users_tbl";
                $stm = $conn->prepare($SQLQuery);
                $stm->execute();
            }
            catch (PDOException $e) {
                $error = "<p style='color:red; text-align:center; font-size:15px'>Error fetching data from database</p>";
            }

            $array = array();
        ?>

        <?php
            $max=0;

            
            while($row = $stm->fetch()) {
                if ($max < $row['level']) {
                    $max = $row['level'];
                }
            }

            $level = $_SESSION['lev'];
            $cid = $_SESSION['random_id'];
    
            try {
                $SQLQuery = "SELECT * FROM users_tbl";
                $stm = $conn->prepare($SQLQuery);
                $stm->execute();
            }
            catch (PDOException $e) {
                $error = "<p style='color:red; text-align:center; font-size:15px'>Error fetching data from database</p>";
            }

            $array = array();

            
            while ($row1 = $stm->fetch()) {
                if ($row1['random_id'] == $cid) {

                    ?>
                    <div class="row" style="margin: 5%">
			
                    <div class="col-sm-2">
                        
                        <h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><?php echo "Level $level"; ?></h3>

                    </div>
                    
                    <div class="col-sm-2">    
                        <h5 class="text-center"><?php echo "<div>".$row1['f_name']."</div>"; ?></h5>
                        <h6 class="text-center"><?php echo "<div> Code: ".$row1['random_id']." </div>"; ?> </h6>
                        <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                        <h6 class="text-center"><?php echo "<div> Referral: ".$row1['referral']." </div>"; ?> </h6>
                        <?php

                            try {
                                $SQLQuery1 = "SELECT * FROM user_profit WHERE Uid = :random_id";
                                $statement1 = $conn->prepare($SQLQuery1);
                                $statement1->execute(array(':random_id' => $row1['random_id']));

                                while($row2 = $statement1->fetch()) {
                                    $Profit = $row2['Profit'];
                                }
                            }
                            catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $final_profit = 0.85*$Profit;
                            echo "Income: ₹ ".$final_profit;
                            
                        
                        ?>
                    </div>

                    </div>
                    
                    <?php
                        $parent = $row1['random_id'];
                        break;
                }
            }

            if($level != $max)
            {
                
            }

            for ($i=$level+1; $i<=$max; $i++) {
                try {
                    $SQLQuery = "SELECT * FROM users_tbl";
                    $stm = $conn->prepare($SQLQuery);
                    $stm->execute();
                }
                catch (PDOException $e) {
                    $error = "<p style='color:red; text-align:center; font-size:15px'>Error fetching data from database</p>";
                }

                ?>
                    <div class="row" style="margin: 5%">
			
                    <div class="col-sm-2">
                        
                        <h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;"><?php echo "Level $i"; ?></h3>

                    </div>
                    
                    <?php
                

                while ($row1 = $stm->fetch()) {
                    
                
                $child = $row1['referral'];
                    
                    if (($row1['level'] == $i) && ($parent == $child)) {
                          
                        
                        ?>
                        
                        <div class="col-sm-2">    
                        <h5 class="text-center"><?php echo "<div>".$row1['f_name']."</div>"; ?></h5>
                        <h6 class="text-center"><?php echo "<div> Code: ".$row1['random_id']." </div>"; ?> </h6>
                        <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                        <h6 class="text-center"><?php echo "<div> Referral: ".$row1['referral']." </div>"; ?> </h6>
                        <?php

                            require_once "data_source/session.php";
                            require_once "data_source/database_connection.php";

                            try {
                                $SQLQuery1 = "SELECT * FROM user_profit WHERE Uid = :random_id";
                                $statement1 = $conn->prepare($SQLQuery1);
                                $statement1->execute(array(':random_id' => $row1['random_id']));

                                while($row1 = $statement1->fetch()) {
                                    $Profit = $row1['Profit'];
                                    
                                }
                            }
                            catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $final_profit = 0.85*$Profit;
                            echo "Income: ₹ ".$final_profit;
                        
                        ?>
                        </div>

                        
                        
                        <?php
                            //$parent = $row1['random_id'];
                    }
                    
                }

                ?></div><?php
            }
        ?>
        
    </div>






        <!-- <div class="row" style="margin: 5%">
			
			<div class="col-sm-2">
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Level 2</h3>

            </div>
            
            <div class="col-sm-2" >    
                <h5 class="text-center">Agraj</h5>
                <h6 class="text-center">Random Code: </h6>  
                <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                <h6 class="text-center">Ref Code: </h6>    
            </div>

            <div class="col-sm-2" >    
                <h5 class="text-center">Mitesh</h5>
                <h6 class="text-center">Random Code: </h6>  
                <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                <h6 class="text-center">Ref Code: </h6>  
            </div>

            <div class="col-sm-2">
            <h5 class="text-center">Hani</h5>
                <h6 class="text-center">Random Code: </h6>
                <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                <h6 class="text-center">Ref Code: </h6>
                </div>
        </div>

        <div class="row" style="margin: 5%">
			
			<div class="col-sm-2">
				
				<h3 class="text-center" style="padding-top: 1%; padding-bottom: 1%;">Level 3</h3>

            </div>
            
            <div class="col-sm-2">    
                <h5 class="text-center">Umang</h5>
                <h6 class="text-center">Random Code: </h6>  
                <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                <h6 class="text-center">Ref Code: </h6>  
            </div>

            <div class="col-sm-2" >    
                <h5 class="text-center">Mihir</h5>
                <h6 class="text-center">Random Code: </h6> 
                <h3 class="text-center" style="border-bottom:3px solid #ccc"></h3>
                <h6 class="text-center">Ref Code: </h6>   
            </div>

        </div> -->
            
            


            
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.js"></script>

</body>

</html>




