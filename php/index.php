<?php
	require'includes/common.php';

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
	<link href="../css/index.css" rel="stylesheet" type="text/css" />
	<script src="../jquery-3.5.1.min.js"></script>  
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
<body>

    <?php include 'includes/header.php'; ?>
	<div class="banner-image">
		<div class="inner-banner-image">
		<center>
			<div class="banner_content">
				<h1>We sell lifestyle.</h1>
				<p>Flat 40% OFF on premium brands</p>
			<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
			</div>
		</center>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="items">
					<a href="products.php">
						<img class="thumbnail" src="../images/camera.jpg">
						<div class="caption">
							<h2>Cameras</h2>
							<p>Choose among the best available in the world.</p>
						</div>
					</a>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="items">
					<a href="products.php">
						<img class="thumbnail" src="../images/watch.jpg">
						<div class="caption">
							<h2>Watches</h2>
							<p>Original watches from the best brands.</p>
						</div>
					</a>
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="items">
					<a href="products.php">
						<img class="thumbnail" src="../images/shirt.jpg">
						<div class="caption">
							<h2>Shirts</h2>
							<p>Our exquisite collection of shirts.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html></font>