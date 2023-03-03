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
			</div>
            <?php
                $id = $_GET["id"];
                $sql = "SELECT * FROM product";
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);
                while ($row = $q->fetch())
                {
                    if ($row['p_id'] == $id) {
                        $name=$row['pname'];
                        $pid=$row['p_id'];
                        $price=$row['p_price'];
                        break; 
                    }
                }
            ?>
			<div class="col-sm-9 text-alignment" >	
				<div class="row">
					<!-- <div class="col-sm-2"></div> -->
					<!-- <div class=""> -->
						<!-- <div class="card mt-2 md-2"> -->
                        <!-- <div class=""> -->
                            <!-- <div class="" class=""> -->
                                <div class="card col-sm-5">
                                    <div class="card-content">
                                        <div class="front-side">
                                            <div class="body">
                                                <img src = "logos/cart.png" width = "100%" height = "auto" >
                                                <br><h5 class="mt-2"> <?php echo $name; ?> </h5>
                                            </div>
                                        </div>
                                        <div class="back-side">
                                        
                                        <!-- <h6 class="card-title text-style"><label style="text-decoration:none; color:orange;"> <?php echo $name ?> </label> </h6> -->
                                        <!-- <h5 class="card-title text-style"> Pr.ID   :<label style="text-decoration:none; color:orange;"> <?php echo $pid ?> </label> </h4> -->
                                        <h5 class="card-title text-style">Rs. <label style="text-decoration: none;"> <?php echo $price ?> </label> </h4>
                                        <form action="" method="post">
                                        <label >Quantity: </label>
                                        <input type="number" name="quantity" id="qty" required="required" value="1" placeholder=" Please Enter Quantity "/><br>
                                        <br>
                                        <input type="submit" class="btn btn-primary" onclick="show_alert()" value=" Buy Now " name="Buy_Now"/>

                                        
                                        </form>
                                        <?php 

                                            $ref_name = $_SESSION['fname']." ".$_SESSION['lname'];

                                            if (isset($_POST["Buy_Now"])) 
                                            {

                                                $id = $_SESSION['random_id'];
                                                $tp=$_POST['quantity'] * $price;
                                                $sql = "INSERT INTO `transaction`(`p_id`, `p_price`, `qty`, `buyer`, `total_price`, `date`) VALUES ('$pid','$price','".$_POST['quantity']."','$id', '$tp', now())";
                                                $q = $conn->query($sql);
                                                $q->setFetchMode(PDO::FETCH_ASSOC);
                                                echo "<script type= 'text/javascript'>alert('Purchase Successfull!');</script>";
                                                // $e_token = $_SESSION['e_token'];

                                                // $updated_token = $e_token - $tp;

                                                // if ($updated_token < 0) {
                                                //     echo "You cant buy this product, you dont have enough tokens.";
                                                // }
                                                // else {
                                                //     $sql = "UPDATE `users_tbl` SET `e_token` = '$updated_token' WHERE `users_tbl`.`random_id` = '$id'";
                                                //     $q = $conn->query($sql);
                                                //     $q->setFetchMode(PDO::FETCH_ASSOC);
                                                // }

                                                $sql = "SELECT * FROM users_tbl WHERE id = $_SESSION[id]";
                                                $q = $conn->query($sql);
                                                $q->setFetchMode(PDO::FETCH_ASSOC);
                                                $row = $q->fetch();
                                                // while ($row = $q->fetch())
                                                // {
                                                        // if($row['random_id'] == $id)
                                                        // {
                                                            // $lvl = $row['level'];
                                                            $random_id = $row['random_id'];
                                                            $ref_id = $row['referral'];
                                                            // break;
                                                        // }

                                                        $transaction_sql = "SELECT * FROM `transaction` WHERE buyer = '$random_id' ORDER BY id DESC LIMIT 1";
                                                        $transaction_q = $conn->query($transaction_sql);
                                                        $transaction_q->setFetchMode(PDO::FETCH_ASSOC);
                                                        $transaction_tbl_row = $transaction_q->fetch();

                                                        $users_tbl_sql = "SELECT * FROM users_tbl WHERE random_id = '$ref_id'";
                                                        $user_q = $conn->query($users_tbl_sql);
                                                        $user_q->setFetchMode(PDO::FETCH_ASSOC);
                                                        $user_tbl_row = $user_q->fetch();
                                                        // print_r($transaction_sql);

                                                        $temp_points = 0.6*$transaction_tbl_row['total_price'];

                                                        $inserted_points = $temp_points;

                                                        $temp_points += $user_tbl_row['points'];
                                                        $update_points = $temp_points;
                                                        print_r($transaction_tbl_row['total_price']);

                                                        $update_points_sql = "UPDATE users_tbl SET points = '$update_points' WHERE random_id = '$ref_id'";
                                                        $update_q = $conn->query($update_points_sql);
                                                        $update_q->setFetchMode(PDO::FETCH_ASSOC);

                                                        // income history
                                                        $sql = "INSERT INTO income_history (`random_id`, `ref_name`, `points`, `date`) VALUES ('$ref_id','$ref_name','$inserted_points', now())";
                                                        $q = $conn->query($sql);
                                                        $q->setFetchMode(PDO::FETCH_ASSOC);

                                                        // getting user level
                                                        $user_level = $user_tbl_row['level'];
                                                        
                                                        $fixed_user_level = $user_tbl_row['level'];

                                                        if ($fixed_user_level > 2) {
                                                            
                                                            // points for ancestors
                                                            $referral_id = $user_tbl_row['referral'];
                                                            
                                                            while ($user_level >= 1) {
                                                                print_r('inside');
                                                                // $referral_id = $user_tbl_row['referral'];

                                                                $ref_sql = "SELECT * from users_tbl WHERE random_id = '$referral_id'";
                                                                $ref_q = $conn->query($ref_sql);
                                                                $ref_q->setFetchMode(PDO::FETCH_ASSOC);
                                                                $ref_row = $ref_q->fetch();
                                                                // print_r($ref_row);

                                                                print_r('inside 2 ');
                                                                if (isset($ref_row['referral'])) {
                                                                    print_r($transaction_tbl_row['total_price']);

                                                                    $a_temp_points = (0.4*$transaction_tbl_row['total_price'])/($fixed_user_level-1);

                                                                    $a_inserted_points = $a_temp_points;

                                                                    // $fixed_destribution = $a_temp_points;

                                                                    $a_temp_points += $ref_row['points'];
                                                                    $a_update_points = $a_temp_points;

                                                                    $a_update_points_sql = "UPDATE users_tbl SET points = '$a_update_points' WHERE random_id = '$referral_id'";
                                                                    $a_update_q = $conn->query($a_update_points_sql);
                                                                    $a_update_q->setFetchMode(PDO::FETCH_ASSOC);
                                                                    print_r($ref_row['f_name'].' '.$a_update_points);

                                                                    // income history for ancestor
                                                                    $sql = "INSERT INTO income_history (`random_id`, `ref_name`, `points`, `date`) VALUES ('$referral_id','$ref_name','$a_inserted_points', now())";
                                                                    $q = $conn->query($sql);
                                                                    $q->setFetchMode(PDO::FETCH_ASSOC);

                                                                    // assigning next ancestor
                                                                    $next_ref_sql = "SELECT * from users_tbl WHERE random_id = '$ref_row[referral]'";
                                                                    $next_ref_q = $conn->query($next_ref_sql);
                                                                    $next_ref_q->setFetchMode(PDO::FETCH_ASSOC);
                                                                    $next_ref_row = $next_ref_q->fetch();

                                                                    if (isset($next_ref_row['referral'])) {
                                                                        $referral_id = $next_ref_row['random_id'];
                                                                        print_r($next_ref_row['referral']);
                                                                    } else {
                                                                        break;
                                                                    }
                                                                    // if ($next_ref_row['referral'] != null) {
                                                                    // } else {
                                                                    //     break;
                                                                    // }
                                                                } else {
                                                                    break;
                                                                }

                                                                $user_level--;
                                                            }
                                                        }
                                                        else {
                                                            $referral_id = $user_tbl_row['referral'];

                                                            $ref_sql = "SELECT * from users_tbl WHERE random_id = '$referral_id'";
                                                            $ref_q = $conn->query($ref_sql);
                                                            $ref_q->setFetchMode(PDO::FETCH_ASSOC);
                                                            $ref_row = $ref_q->fetch();
                                                            
                                                            $a_temp_points = (0.4*$transaction_tbl_row['total_price']);

                                                            $root_inserted_points = $a_temp_points;

                                                            // $fixed_destribution = $a_temp_points;

                                                            $a_temp_points += $ref_row['points'];
                                                            $a_update_points = $a_temp_points;

                                                            $a_update_points_sql = "UPDATE users_tbl SET points = '$a_update_points' WHERE random_id = '$referral_id'";
                                                            $a_update_q = $conn->query($a_update_points_sql);
                                                            $a_update_q->setFetchMode(PDO::FETCH_ASSOC);
                                                            // print_r($ref_row['f_name'].' '.$a_update_points);

                                                            // income history for root
                                                            $sql = "INSERT INTO income_history (`random_id`, `ref_name`, `points`, `date`) VALUES ('$referral_id', '$ref_name','$root_inserted_points', now())";
                                                            $q = $conn->query($sql);
                                                            $q->setFetchMode(PDO::FETCH_ASSOC);
                                                        }

                                                // }

                                                // $profit=0.1;
                                                // $per=0.1;
                                                // $lvl--;
                                                // $per = 12 - 2 * $lvl;
                                                // $tid=0;
                                                // $profit = $per * $tp / 100;
                                                // $sql = "UPDATE `user_profit` SET `Profit` = (`Profit` + '$profit') WHERE `user_profit`.`Uid` = '$parid'";
                                                // $q = $conn->query($sql);
                                                // $q->setFetchMode(PDO::FETCH_ASSOC);
                                                // $lvl--;
                                                
                                                // if($lvl>0)
                                                // {
                                                    
                                                //     $profit = ((10-$per) * $tp / 100)/ ($lvl);
                                                //     $id=$parid;
                                                //     while($lvl>0)
                                                //     {
                                                //         $sql = 'SELECT * FROM users_tbl';
                                                //         $q = $conn->query($sql);
                                                //         $q->setFetchMode(PDO::FETCH_ASSOC);
                                                //         while ($row = $q->fetch())
                                                //         {
                                                //                 if($row['random_id'] == $id)
                                                //                 {
                                                //                     $parid = $row['referral'];
                                                //                     //echo $parid;
                                                //                     $sql = "UPDATE `user_profit` SET `Profit` = (`Profit` + '$profit') WHERE `user_profit`.`Uid` = '$parid'";
                                                //                     $q = $conn->query($sql);
                                                //                     $q->setFetchMode(PDO::FETCH_ASSOC);
                                                //                     break;
                                                //                 }
                                        
                                                //         }
                                                //         $id= $parid;
                                                //         $lvl--;
                                                //     }
                                                // }

                                                
                            
                                            }
                                        
                                        ?>                        
                                        
                                        </div>
                                    </div>
                                </div> 
                            <!-- </div>  -->
                        <!-- </div> -->
                    <!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
<script>
    function show_alert(){
        confirm("Are you sure you want to purchase this product ?");
    }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>