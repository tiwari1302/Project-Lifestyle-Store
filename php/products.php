<?php
	require'includes/common.php';
	include'check-if-added.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">	
	<link href="../css/products.css" rel="stylesheet" type="text/css" />		
	<script src="../jquery-3.5.1.min.js"></script>
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>

<body>
	<?php include 'includes/header.php'; ?>	
	
	<div class="container">
		<div class="jumbotron">
			<h1><center>Welcome to our Lifestyle Store!</center></h1>
			<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
		</div>
	</div>	
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/5.jpg">
					<div class="caption">
						<h3>Canon EOS</h3>
						<p>Price: Rs. 36000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/2.jpg">
					<div class="caption">
						<h3>Sony DSLR</h3>
						<p>Price: Rs. 40000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(2)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
						
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/3.jpg">
					<div class="caption">
						<h3>Sony DSLR</h3>
						<p>Price: Rs. 50000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(3)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>

			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/4.jpg">
					<div class="caption">
						<h3>Olympus DSLR</h3>
						<p>Price: Rs. 80000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(4)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
		</div>
		
		<div class="row text-center">
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/9.jpg">
					<div class="caption">
						<h3>Titan Model #301</h3>
						<p>Price: Rs. 13000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(5)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/10.jpg">
					<div class="caption">
						<h3>Titan Model #201</h3>
						<p>Price: Rs. 3000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(6)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/11.jpg">
					<div class="caption">
						<h3>HMT Milan</h3>
						<p>Price: Rs. 8000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(7)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>

			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/12.jpg">
					<div class="caption">
						<h3>Faber Luba #111</h3>
						<p>Price: Rs. 18000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(8)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
		</div>
		
		<div class="row text-center">
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/8.jpg">
					<div class="caption">
						<h3>H&W</h3>
						<p>Price: Rs. 800.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(9)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/6.jpg">
					<div class="caption">
						<h3>Louis Phil</h3>
						<p>Price: Rs. 1000.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(10)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/13.jpg">
					<div class="caption">
						<h3>John Zok</h3>
						<p>Price: Rs. 1500.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(11)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>

			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
				<img class="img-responsive" src="../images/14.jpg">
					<div class="caption">
						<h3>Jhalsani</h3>
						<p>Price: Rs. 1300.00</p>
						<?php 
							if(!isset($_SESSION['email'])){  
						?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                            else{
                            if(check_if_added_to_cart(12)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                            ?>
                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                        <?php
                            }
                        }
                        ?>
					</div>
			</div>
			</div>
			
		</div>
		</div>
	</div>
	
	<?php include 'includes/footer.php'; ?>
</body>
</html>
