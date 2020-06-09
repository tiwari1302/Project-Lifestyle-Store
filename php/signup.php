<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">	
	<link href="../css/signup.css" rel="stylesheet" type="text/css" />
	<script src="../jquery-3.5.1.min.js"></script>
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
<body class=" main-box-cus">
<div>
    <?php include 'includes/header.php'; ?>

	<div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2 class="headtext">SIGN UP</h2>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>	
            <br><br><br><br><br><br>
            <?php include 'includes/footer.php'; ?>
        </div>
</body>
</html>